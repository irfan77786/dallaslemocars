<?php

namespace App\Support;

use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPdfWrapper;

class BookingPdfBuilder
{
    public const MAX_PAGES = 3;

    public static function make(array $bookingData): DomPdfWrapper
    {
        return Pdf::loadView('pdfs.booking', [
            'bookingData' => $bookingData,
        ]);
    }

    public static function pageCount(DomPdfWrapper $pdf): int
    {
        $pdf->render();

        return (int) $pdf->getDomPDF()->getCanvas()->get_page_count();
    }

    public static function makeWithinPageLimit(array $bookingData, int $maxPages = self::MAX_PAGES): DomPdfWrapper
    {
        $pdf = self::make($bookingData);
        $pdf->render();

        return $pdf;
    }

    public static function save(string $path, array $bookingData, int $maxPages = self::MAX_PAGES): void
    {
        self::makeWithinPageLimit($bookingData, $maxPages)->save($path);
    }
}
