<?php

namespace App\Support;

class AdminNotificationEmails
{
    /**
     * @return list<string>
     */
    public static function addresses(): array
    {
        $emails = [
            config('mail.admin_email'),
        ];

        return collect($emails)
            ->map(fn ($email) => trim((string) $email))
            ->filter(fn ($email) => $email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL))
            ->unique(fn ($email) => strtolower($email))
            ->values()
            ->all();
    }
}
