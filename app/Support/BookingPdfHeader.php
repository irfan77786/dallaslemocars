<?php

namespace App\Support;

class BookingPdfHeader
{
    /** Same as .btn-primary in new_assets/css/style.css */
    public const GRADIENT_START = '#e52c43';

    public const GRADIENT_MID = '#ff6c00';

    public const GRADIENT_END = '#e52c43';

    /** Light tint of brand gradient — warm cream/peach (reference-style subsection bar) */
    public const LIGHT_BG = '#fef3ef';

    public const LIGHT_TEXT = '#0b1422';

    public const BAR_HEIGHT = 40;

    public const BAR_HEIGHT_COMPACT = 34;

    /** Gradient-only PNG (no text) — safe to stretch; pair with HTML text in the PDF. */
    public static function primaryGradientBarDataUri(int $width = 400, int $height = 40): ?string
    {
        return self::gradientBarDataUri(
            self::hexToRgb(self::GRADIENT_START),
            self::hexToRgb(self::GRADIENT_MID),
            $width,
            $height
        );
    }

    /** Light tint gradient-only PNG for subsection bars. */
    public static function lightGradientBarDataUri(int $width = 400, int $height = 40): ?string
    {
        return self::gradientBarDataUri(
            self::lightTintRgb(self::GRADIENT_START),
            self::lightTintRgb(self::GRADIENT_MID),
            $width,
            $height
        );
    }

    /**
     * @param array{0: int, 1: int, 2: int} $from
     * @param array{0: int, 1: int, 2: int} $to
     */
    private static function gradientBarDataUri(array $from, array $to, int $width, int $height): ?string
    {
        if (! function_exists('imagecreatetruecolor')) {
            return null;
        }

        $img = imagecreatetruecolor($width, $height);
        if ($img === false) {
            return null;
        }

        for ($x = 0; $x < $width; $x++) {
            $ratio = $width > 1 ? $x / ($width - 1) : 0;
            if ($ratio <= 0.5) {
                $t = $ratio * 2;
                $rgb = self::lerpRgb($from, $to, $t);
            } else {
                $t = ($ratio - 0.5) * 2;
                $rgb = self::lerpRgb($to, $from, $t);
            }
            $color = imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);
            imageline($img, $x, 0, $x, $height - 1, $color);
        }

        ob_start();
        imagepng($img);
        imagedestroy($img);
        $png = ob_get_clean();

        return is_string($png) && $png !== ''
            ? 'data:image/png;base64,' . base64_encode($png)
            : null;
    }

    /** @return array{0: int, 1: int, 2: int} */
    private static function lightTintRgb(string $hex, float $whiteRatio = 0.9): array
    {
        $rgb = self::hexToRgb($hex);

        return [
            (int) round($rgb[0] + (255 - $rgb[0]) * $whiteRatio),
            (int) round($rgb[1] + (255 - $rgb[1]) * $whiteRatio),
            (int) round($rgb[2] + (255 - $rgb[2]) * $whiteRatio),
        ];
    }

    private static function ttfBaselineY(int $fontSize, int $angle, string $fontPath, string $text, int $imageHeight): int
    {
        $bbox = imagettfbbox($fontSize, $angle, $fontPath, $text);
        if ($bbox === false) {
            return (int) round($imageHeight * 0.65);
        }

        return (int) round(($imageHeight - ($bbox[1] - $bbox[7])) / 2 - $bbox[7]);
    }

    /** @return array{0: int, 1: int, 2: int} */
    private static function hexToRgb(string $hex): array
    {
        $hex = ltrim($hex, '#');

        return [
            hexdec(substr($hex, 0, 2)),
            hexdec(substr($hex, 2, 2)),
            hexdec(substr($hex, 4, 2)),
        ];
    }

    /** @param array{0: int, 1: int, 2: int} $a @param array{0: int, 1: int, 2: int} $b @return array{0: int, 1: int, 2: int} */
    private static function lerpRgb(array $a, array $b, float $t): array
    {
        return [
            (int) round($a[0] + ($b[0] - $a[0]) * $t),
            (int) round($a[1] + ($b[1] - $a[1]) * $t),
            (int) round($a[2] + ($b[2] - $a[2]) * $t),
        ];
    }
}
