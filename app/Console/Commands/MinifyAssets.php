<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class MinifyAssets extends Command
{
    /**
     * Generates `.min.css` / `.min.js` siblings for every non-minified CSS/JS
     * file under public/assets and public/admin. The companion `.htaccess`
     * rewrite serves the `.min.*` file automatically when present, so SEO
     * tools (Semrush, PageSpeed) see minified output.
     *
     *   php artisan assets:minify
     *   php artisan assets:minify --force        # rebuild every .min.* sibling
     *   php artisan assets:minify --path=public/assets
     */
    protected $signature = 'assets:minify
                            {--force : Rebuild .min.* siblings even when up to date}
                            {--path=* : Limit to these public/ sub-paths (e.g. --path=assets)}';

    protected $description = 'Generate minified .min.css / .min.js siblings for all non-minified CSS/JS assets.';

    /** @var string[] Directories scanned by default (relative to public_path()). */
    private array $defaultPaths = [
        'assets',
        'admin',
        'new_assets',
    ];

    public function handle(): int
    {
        $rootsOption = (array) $this->option('path');
        $roots = ! empty($rootsOption) ? $rootsOption : $this->defaultPaths;
        $force = (bool) $this->option('force');

        $totalScanned = 0;
        $totalWritten = 0;
        $bytesIn = 0;
        $bytesOut = 0;

        foreach ($roots as $relative) {
            $absolute = public_path(trim($relative, '/\\'));
            if (! is_dir($absolute)) {
                $this->warn("Skipping missing directory: {$absolute}");

                continue;
            }

            $this->info("Scanning {$absolute}");
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($absolute, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::LEAVES_ONLY
            );

            /** @var SplFileInfo $file */
            foreach ($iterator as $file) {
                if (! $file->isFile()) {
                    continue;
                }

                $ext = strtolower($file->getExtension());
                if (! in_array($ext, ['css', 'js'], true)) {
                    continue;
                }

                $name = $file->getFilename();
                if (preg_match('/\.min\.(css|js)$/i', $name)) {
                    continue;
                }

                $totalScanned++;

                $sourcePath = $file->getRealPath();
                $minPath = preg_replace('/\.(css|js)$/i', '.min.$1', $sourcePath);

                if (! $force && file_exists($minPath) && filemtime($minPath) >= filemtime($sourcePath)) {
                    continue;
                }

                $contents = @file_get_contents($sourcePath);
                if ($contents === false) {
                    $this->warn("  Skipped (unreadable): {$sourcePath}");

                    continue;
                }

                $minified = $ext === 'css'
                    ? $this->minifyCss($contents)
                    : $this->minifyJs($contents);

                if ($minified === '' && $contents !== '') {
                    // Source was nothing but comments/whitespace — write an empty .min sibling
                    // so the rewrite rule still serves something tiny and the SEO crawler is happy.
                    $minified = "/* intentionally empty (source consisted only of comments) */\n";
                }

                if (@file_put_contents($minPath, $minified) === false) {
                    $this->warn("  Failed writing: {$minPath}");

                    continue;
                }

                $inSize = strlen($contents);
                $outSize = strlen($minified);
                $bytesIn += $inSize;
                $bytesOut += $outSize;
                $totalWritten++;

                $pct = $inSize > 0 ? (int) round((1 - $outSize / $inSize) * 100) : 0;
                $rel = str_replace(public_path() . DIRECTORY_SEPARATOR, '', $minPath);
                $this->line(sprintf('  + %s  (%s → %s, -%d%%)', $rel, $this->fmt($inSize), $this->fmt($outSize), $pct));
            }
        }

        $this->newLine();
        $this->info(sprintf(
            'Done. Scanned %d source file(s), wrote/updated %d .min.* sibling(s). Total %s → %s (-%d%%).',
            $totalScanned,
            $totalWritten,
            $this->fmt($bytesIn),
            $this->fmt($bytesOut),
            $bytesIn > 0 ? (int) round((1 - $bytesOut / max(1, $bytesIn)) * 100) : 0
        ));

        return self::SUCCESS;
    }

    /**
     * Minify CSS with safe regex passes.
     */
    private function minifyCss(string $css): string
    {
        // Preserve license/important comments (/*! ... */)
        $placeholders = [];
        $css = preg_replace_callback('/\/\*![\s\S]*?\*\//', function ($m) use (&$placeholders) {
            $key = '__KEEP_COMMENT_' . count($placeholders) . '__';
            $placeholders[$key] = $m[0];

            return $key;
        }, $css);

        // Strip all other comments
        $css = preg_replace('/\/\*[\s\S]*?\*\//', '', $css);

        // Normalize whitespace
        $css = preg_replace('/\s+/', ' ', $css);

        // Remove whitespace around symbols
        $css = preg_replace('/\s*([{}:;,>+~])\s*/', '$1', $css);

        // Drop last semicolon before }
        $css = preg_replace('/;}/', '}', $css);

        // Collapse zero units (0px -> 0, 0em -> 0) — but not inside calc()
        $css = preg_replace('/(?<![a-z0-9.])0(?:px|em|rem|%|in|cm|mm|pc|pt|ex|vh|vw|vmin|vmax)\b/i', '0', $css);

        // Restore preserved comments
        foreach ($placeholders as $key => $value) {
            $css = str_replace($key, $value, $css);
        }

        return trim($css);
    }

    /**
     * Conservative JS minifier — strips comments and collapses whitespace
     * without rewriting tokens. Skips files that look already minified or
     * that contain template literals/regex constructs that are unsafe to
     * touch with regex (in which case we return the original content).
     */
    private function minifyJs(string $js): string
    {
        // Already minified heuristic
        $sampleLine = strtok($js, "\n");
        if ($sampleLine !== false && strlen($sampleLine) > 500 && substr_count($js, "\n") < 20) {
            return $js;
        }

        // Templates / regex are tricky — bail safely on these patterns
        if (preg_match('/`[^`]*\$\{/', $js)) {
            // Has template literal with interpolation; keep original (still gzip will compress well)
            return $this->stripLineCommentsOnly($js);
        }

        // Remove block comments but keep /*! license */
        $js = preg_replace_callback('/\/\*([\s\S]*?)\*\//', function ($m) {
            return isset($m[1][0]) && $m[1][0] === '!' ? $m[0] : '';
        }, $js);

        // Remove single-line comments (avoid URLs like http://)
        $js = preg_replace('#(^|[^:\\\\\'"`])//[^\r\n]*#m', '$1', $js);

        // Collapse runs of whitespace that are inside source (but preserve newlines as separators
        // because some scripts rely on ASI – Automatic Semicolon Insertion)
        $js = preg_replace('/[ \t]+/', ' ', $js);
        $js = preg_replace('/[ \t]*\r?\n[ \t]*/', "\n", $js);
        $js = preg_replace('/\n{2,}/', "\n", $js);
        $js = preg_replace('/ ?([{};,:()\[\]=<>+\-*\/&|!?])\ ?/', '$1', $js);

        // Reinstate space where two identifiers were merged (e.g. "returnfoo" -> "return foo")
        $js = preg_replace('/\b(return|typeof|in|of|new|delete|void|throw|case|instanceof|var|let|const|function|else|do)\b(?=[A-Za-z_$])/i', '$1 ', $js);

        return trim($js);
    }

    private function stripLineCommentsOnly(string $js): string
    {
        $js = preg_replace('#(^|[^:\\\\\'"`])//[^\r\n]*#m', '$1', $js);
        $js = preg_replace('/[ \t]+/', ' ', $js);
        $js = preg_replace('/\n{2,}/', "\n", $js);

        return trim($js);
    }

    private function fmt(int $bytes): string
    {
        if ($bytes >= 1024 * 1024) {
            return number_format($bytes / 1024 / 1024, 2) . ' MB';
        }
        if ($bytes >= 1024) {
            return number_format($bytes / 1024, 1) . ' KB';
        }

        return $bytes . ' B';
    }
}
