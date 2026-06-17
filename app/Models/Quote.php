<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'quote_number',
        'vehicle_type',
        'trip_type',
        'number_of_passengers',
        'trip_date',
        'trip_time',
        'pickup_address',
        'dropoff_address',
        'full_name',
        'email',
        'message',
    ];

    public static function generateQuoteNumber(): string
    {
        $latestQuote = static::orderBy('id', 'desc')->first();
        $lastNumericId = 41100;

        if ($latestQuote && preg_match('/GAQ-(\d+)/', $latestQuote->quote_number, $matches)) {
            $lastNumericId = (int) $matches[1];
        }

        do {
            $lastNumericId++;
            $quoteNumber = 'GAQ-' . $lastNumericId;
        } while (static::where('quote_number', $quoteNumber)->exists());

        return $quoteNumber;
    }
}
