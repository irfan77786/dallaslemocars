<?php

namespace App\Jobs;

use App\Support\AdminNotificationEmails;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendWebsiteFormEmailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private const ALLOWED_MAILABLES = [
        \App\Mail\ContactMail::class,
        \App\Mail\CorporateSupportMail::class,
        \App\Mail\QuoteMail::class,
    ];

    public int $tries = 3;

    public int $timeout = 120;

    /**
     * @param  class-string  $mailableClass
     */
    public function __construct(
        public string $mailableClass,
        public array $data,
        public string $customerEmail,
    ) {}

    public function handle(): void
    {
        if (! in_array($this->mailableClass, self::ALLOWED_MAILABLES, true)) {
            Log::warning('SendWebsiteFormEmailsJob: unsupported mailable class', [
                'mailable' => $this->mailableClass,
            ]);

            return;
        }

        $customerEmail = trim($this->customerEmail);
        if ($customerEmail !== '' && filter_var($customerEmail, FILTER_VALIDATE_EMAIL)) {
            Mail::to($customerEmail)->send(new $this->mailableClass($this->data, false));
        }

        foreach (AdminNotificationEmails::addresses() as $adminEmail) {
            Mail::to($adminEmail)->send(new $this->mailableClass($this->data, true));
        }
    }
}
