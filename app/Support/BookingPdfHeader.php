<?php

namespace App\Support;

class BookingPdfHeader
{
    /** Same as .btn-primary in new_assets/css/style.css */
    public const GRADIENT_START = '#e52c43';

    public const GRADIENT_MID = '#ff6c00';

    public const GRADIENT_END = '#e52c43';

    public const LIGHT_BG = '#f4f6f8';

    public const LIGHT_TEXT = '#0b1422';

    /**
     * PNG data URI: horizontal red → orange → red bar with white title (DomPDF-safe).
     */
    public static function primaryBarDataUri(string $title, int $width = 1200, int $height = 52, ?string $rightText = null): ?string
    {
        if (! function_exists('imagecreatetruecolor')) {
            return null;
        }

        if ($rightText !== null && $rightText !== '') {
            $height = max($height, 56);
        }

        $img = imagecreatetruecolor($width, $height);
        if ($img === false) {
            return null;
        }

        $from = self::hexToRgb(self::GRADIENT_START);
        $to = self::hexToRgb(self::GRADIENT_MID);

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

        $white = imagecolorallocate($img, 255, 255, 255);
        $boldFontPath = base_path('vendor/dompdf/dompdf/lib/fonts/DejaVuSans-Bold.ttf');

        if (is_readable($boldFontPath)) {
            $titleSize = 18;
            $titleY = self::ttfBaselineY($titleSize, 0, $boldFontPath, $title, $height);
            imagettftext($img, $titleSize, 0, 20, $titleY, $white, $boldFontPath, $title);

            if ($rightText !== null && $rightText !== '') {
                $rightSize = 12;
                $rightY = self::ttfBaselineY($rightSize, 0, $boldFontPath, $rightText, $height);
                $bbox = imagettfbbox($rightSize, 0, $boldFontPath, $rightText);
                $rightWidth = $bbox !== false ? abs($bbox[2] - $bbox[0]) : 0;
                $rightX = max(20, $width - $rightWidth - 20);
                imagettftext($img, $rightSize, 0, $rightX, $rightY, $white, $boldFontPath, $rightText);
            }
        } else {
            $fallbackY = (int) (($height - 15) / 2);
            imagestring($img, 5, 12, $fallbackY, $title, $white);
            if ($rightText !== null && $rightText !== '') {
                imagestring($img, 4, max(12, $width - (strlen($rightText) * 7) - 12), $fallbackY, $rightText, $white);
            }
        }

        ob_start();
        imagepng($img);
        imagedestroy($img);
        $png = ob_get_clean();

        return is_string($png) && $png !== ''
            ? 'data:image/png;base64,' . base64_encode($png)
            : null;
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
