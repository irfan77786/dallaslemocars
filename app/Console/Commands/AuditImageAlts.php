<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class AuditImageAlts extends Command
{
    /**
     * Audit (and optionally auto-fix) `<img>` tags that are missing an
     * `alt` attribute or have an empty one inside Blade views.
     *
     *   php artisan images:audit-alt              # report only
     *   php artisan images:audit-alt --fix        # add a humanised alt derived from filename
     *   php artisan images:audit-alt --fix --include-empty   # also rewrite alt=""
     */
    protected $signature = 'images:audit-alt
                            {--fix : Write a generated alt attribute back to the file}
                            {--include-empty : Treat alt="" as missing and replace it}
                            {--path=resources/views : Directory to scan (relative to project root)}';

    protected $description = 'Audit Blade templates for <img> tags missing alt attributes and optionally auto-fix them.';

    public function handle(): int
    {
        $base = base_path(trim((string) $this->option('path'), '/\\'));
        if (! is_dir($base)) {
            $this->error("Directory not found: {$base}");

            return self::FAILURE;
        }

        $fix = (bool) $this->option('fix');
        $includeEmpty = (bool) $this->option('include-empty');

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($base, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        $totalFiles = 0;
        $filesWithIssues = 0;
        $totalMissing = 0;
        $totalFixed = 0;

        /** @var SplFileInfo $file */
        foreach ($iterator as $file) {
            if (! $file->isFile()) {
                continue;
            }
            if (! str_ends_with($file->getFilename(), '.blade.php')) {
                continue;
            }

            $totalFiles++;
            $contents = (string) file_get_contents($file->getRealPath());
            $original = $contents;

            // Mask Blade expressions ({{ ... }}, {!! ... !!}, @php blocks, directives) before
            // scanning, so `>` inside expressions like $obj->prop doesn't truncate matches.
            $scanSource = $this->maskBladeExpressions($contents);

            $matches = [];
            if (! preg_match_all('/<img\b[^>]*>/i', $scanSource, $matches, PREG_OFFSET_CAPTURE)) {
                continue;
            }

            $issuesInFile = 0;
            $rewrites = [];

            foreach ($matches[0] as $match) {
                $maskedTag = $match[0];
                $offset = $match[1];
                // Recover the real tag (with Blade syntax) from the original file using the offset/length.
                $tag = substr($contents, $offset, strlen($maskedTag));

                // Detect `alt="..."`, `alt='...'`, or a bare boolean `alt` attribute.
                $hasAlt = (bool) preg_match('/\balt(?=[\s=>\/])/i', $tag);
                $isEmpty = $hasAlt && (
                    // bare alt (no =) → treated as alt=""
                    (preg_match('/\balt(?=[\s>\/])/i', $tag) && ! preg_match('/\balt\s*=/i', $tag))
                    // alt="" or alt=''
                    || preg_match('/\balt\s*=\s*("|\')\s*\1/', $tag)
                );

                $missing = ! $hasAlt || ($includeEmpty && $isEmpty);
                if (! $missing) {
                    continue;
                }

                $issuesInFile++;
                $totalMissing++;

                if (! $fix) {
                    continue;
                }

                $altText = $this->guessAlt($tag);
                if ($altText === '') {
                    continue;
                }

                if (! $hasAlt) {
                    // Insert alt right before the closing > (or /> on self-closing).
                    if (preg_match('/(\s*\/?>\s*)$/', $tag, $tail, PREG_OFFSET_CAPTURE)) {
                        $insertAt = $offset + $tail[0][1];
                        $newTag = substr($tag, 0, $tail[0][1]) . ' alt="' . $altText . '"' . $tail[0][0];
                    } else {
                        // Defensive fallback – append before final >
                        $newTag = preg_replace('/>$/', ' alt="' . $altText . '">', $tag);
                    }
                } else {
                    // Replace the empty alt
                    $newTag = preg_replace('/\balt\s*=\s*("|\')\s*\1/', 'alt="' . $altText . '"', $tag, 1);
                }

                if ($newTag !== null && $newTag !== $tag) {
                    $rewrites[$tag] = $newTag;
                }
            }

            if ($issuesInFile > 0) {
                $filesWithIssues++;
                $this->line("• {$file->getPathname()} — {$issuesInFile} issue(s)");
            }

            if ($fix && ! empty($rewrites)) {
                foreach ($rewrites as $from => $to) {
                    if (str_contains($contents, $from)) {
                        $contents = str_replace($from, $to, $contents);
                        $totalFixed++;
                    }
                }
                if ($contents !== $original) {
                    file_put_contents($file->getRealPath(), $contents);
                }
            }
        }

        $this->newLine();
        $this->info(sprintf(
            'Scanned %d Blade file(s). %d file(s) had issues. %d <img> tag(s) missing/empty alt%s.',
            $totalFiles,
            $filesWithIssues,
            $totalMissing,
            $fix ? sprintf(', %d rewritten.', $totalFixed) : ' (run with --fix to write).'
        ));

        return self::SUCCESS;
    }

    /**
     * Replace Blade expressions with placeholder strings of the same length so regex offsets stay aligned.
     */
    private function maskBladeExpressions(string $source): string
    {
        $patterns = [
            '/\{\{\s*[\s\S]*?\s*\}\}/',   // {{ ... }}
            '/\{!!\s*[\s\S]*?\s*!!\}/',   // {!! ... !!}
            '/@php[\s\S]*?@endphp/i',     // @php ... @endphp
            '/@(?:if|elseif|unless|isset|empty|foreach|forelse|for|while|switch|case|include|extends|section|push|stack|yield|csrf|method|component|slot|env|auth|guest|production|inject)\s*\([^()]*\)/i',
            '/<\?php[\s\S]*?\?>/i',
        ];
        foreach ($patterns as $pattern) {
            $source = preg_replace_callback($pattern, function ($m) {
                return str_repeat(' ', strlen($m[0]));
            }, (string) $source);
        }

        return (string) $source;
    }

    /**
     * Generate a human-readable alt attribute from the image URL.
     */
    private function guessAlt(string $tag): string
    {
        if (! preg_match('/\bsrc\s*=\s*("|\')(.*?)\1/i', $tag, $m)) {
            return 'Dallas Limo Black Cars';
        }

        $src = $m[2];

        // Strip blade expressions ({{ asset('x.jpg') }}) — keep just final path segment guess
        if (preg_match('/[\'"]([^\'"]+?\.(?:png|jpe?g|gif|webp|svg|avif|ico))[\'"]/i', $src, $bm)) {
            $src = $bm[1];
        }

        $basename = pathinfo(parse_url($src, PHP_URL_PATH) ?: $src, PATHINFO_FILENAME);
        if ($basename === '' || $basename === false) {
            return 'Dallas Limo Black Cars';
        }

        // Common patterns to skip / fallback
        if (preg_match('/^[0-9a-f]{16,}$|^\d{8,}$/i', $basename)) {
            return 'Dallas Limo Black Cars';
        }

        $text = preg_replace('/[-_]+/', ' ', $basename);
        $text = preg_replace('/\s+/', ' ', (string) $text);
        $text = trim((string) $text);

        // Drop trailing dimensions / hashes / numeric suffixes
        $text = preg_replace('/\s+\d{2,4}x\d{2,4}\b.*$/i', '', (string) $text);
        $text = preg_replace('/\s+v?\d+(\.\d+)*$/i', '', (string) $text);
        $text = trim((string) $text);

        if ($text === '') {
            return 'Dallas Limo Black Cars';
        }

        // Title-case but keep common acronyms uppercase
        $words = preg_split('/\s+/', $text) ?: [];
        $acronyms = ['dfw', 'dal', 'tx', 'usa', 'us', 'ny', 'mba', 'vip', 'pdf'];
        foreach ($words as &$word) {
            $lower = strtolower($word);
            if (in_array($lower, $acronyms, true)) {
                $word = strtoupper($lower);
            } else {
                $word = ucfirst($lower);
            }
        }
        unset($word);

        $alt = implode(' ', $words);
        // Escape double quotes for safety
        return str_replace('"', '&quot;', $alt);
    }
}
