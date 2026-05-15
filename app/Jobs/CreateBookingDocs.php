<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class CreateBookingDocs
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $bookingData;
    public $customBookingId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($bookingData, $customBookingId)
    {
        $this->bookingData = $bookingData;
        $this->customBookingId = $customBookingId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $pdfsDirectory = public_path('pdfs');

            if (!file_exists($pdfsDirectory)) {
                mkdir($pdfsDirectory, 0777, true);
            }

            $filePath = $pdfsDirectory . '/' . $this->customBookingId . '.pdf';

            $pdf = PDF::loadView('pdfs.booking', ['bookingData' => $this->bookingData]);
            $pdf->save($filePath);

            $adminEmail = trim((string) (config('mail.admin_email') ?: env('ADMIN_EMAIL_ADDRESS')));
            \Log::info('Admin email from config: ' . ($adminEmail ?: 'NOT FOUND'));
            \Log::info('Customer email: ' . $this->bookingData['email']);

            $recipients = [
                ['email' => $this->bookingData['email'], 'isAdmin' => false, 'isBooker' => false],
            ];

            if (!empty($adminEmail)) {
                $recipients[] = ['email' => trim($adminEmail), 'isAdmin' => true, 'isBooker' => false];
                \Log::info('Added admin email to recipients: ' . $adminEmail);
            } else {
                \Log::warning('Admin email not found in configuration');
            }

            if (
                ! empty($this->bookingData['isBookingForOthers'])
                && ! empty($this->bookingData['booker_email'])
            ) {
                $bookerAddr = trim((string) $this->bookingData['booker_email']);
                $customerAddr = trim((string) ($this->bookingData['email'] ?? ''));
                if (
                    filter_var($bookerAddr, FILTER_VALIDATE_EMAIL)
                    && strcasecmp($bookerAddr, $customerAddr) !== 0
                ) {
                    $recipients[] = [
                        'email' => $bookerAddr,
                        'isAdmin' => false,
                        'isBooker' => true,
                    ];
                    \Log::info('Added booker email to recipients: ' . $bookerAddr);
                }
            }

            \Log::info('Final recipient list:', $recipients);

            foreach ($recipients as $index => $recipient) {
                try {
                    $to = isset($recipient['email']) ? trim((string) $recipient['email']) : '';
                    if ($to === '' || ! filter_var($to, FILTER_VALIDATE_EMAIL)) {
                        \Log::warning('CreateBookingDocs: skipping invalid recipient address: ' . json_encode($recipient));

                        continue;
                    }

                    \Log::info('Sending email #' . ($index + 1) . ' to: ' . $to);

                    $mailable = new \App\Mail\Booking(
                        $this->bookingData,
                        $recipient['isAdmin'],
                        $recipient['isBooker']
                    );

                    Mail::to($to)->send($mailable);
                    \Log::info('Successfully sent email #' . ($index + 1) . ' to: ' . $to);
                } catch (\Exception $e) {
                    $failedTo = isset($to) ? $to : (isset($recipient['email']) ? (string) $recipient['email'] : '');
                    \Log::error('Failed to send email #' . ($index + 1) . ' to ' . $failedTo . ': ' . $e->getMessage());
                    \Log::error("Error details: " . $e->getFile() . ":" . $e->getLine() . " - " . $e->getTraceAsString());
                    continue;
                }
            }
        } catch (\Exception $e) {
            \Log::error("Error in CreateBookingDocs job: " . $e->getMessage());
            throw $e;
        }
    }
}
