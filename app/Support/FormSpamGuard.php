<?php

namespace App\Support;

class FormSpamGuard
{
    /**
     * Returns true when the submission looks like spam and should be dropped.
     */
    public static function isSpam(array $fields): bool
    {
        $combined = implode(' ', array_map(
            static fn ($value) => is_scalar($value) ? (string) $value : '',
            $fields
        ));

        // Honeypot filled
        if (filled($fields['website'] ?? null) || filled($fields['company_url'] ?? null)) {
            return true;
        }

        // Links are almost never needed in name/contact fields
        if (preg_match('/https?:\/\/|www\.|\/\/[^\s]+/i', $combined)) {
            return true;
        }

        // Cyrillic / CJK scam floods (Russian money-transfer spam, etc.)
        if (preg_match('/[\x{0400}-\x{04FF}\x{4E00}-\x{9FFF}]/u', $combined)) {
            return true;
        }

        $name = (string) ($fields['full_name'] ?? '');
        if ($name !== '' && preg_match('/\d{5,}/', $name)) {
            return true;
        }

        // Gibberish names: long consonant clusters without vowels
        if ($name !== '' && preg_match('/^[a-z]{8,}$/i', $name) && ! preg_match('/[aeiou]/i', $name)) {
            return true;
        }

        return false;
    }
}
