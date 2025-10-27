<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;

class CreateBookingDocs implements ShouldQueue
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

            $adminEmail = config('mail.admin_email', env('ADMIN_EMAIL_ADDRESS', 'nexusdeveloper09@gmail.com'));
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

            if ($this->bookingData['isBookingForOthers'] && $this->bookingData['booker_email'] !== $this->bookingData['email']) {
                $recipients[] = [
                    'email' => $this->bookingData['booker_email'],
                    'isAdmin' => false,
                    'isBooker' => true
                ];
                \Log::info('Added booker email to recipients: ' . $this->bookingData['booker_email']);
            }

            \Log::info('Final recipient list:', $recipients);

            foreach ($recipients as $index => $recipient) {
                try {
                    \Log::info("Sending email #" . ($index + 1) . " to: " . $recipient['email']);
                    
                    $email = new \App\Mail\Booking(
                        $this->bookingData,
                        $recipient['isAdmin'],
                        $recipient['isBooker']
                    );
                    
                    Mail::to($recipient['email'])->send($email);
                    \Log::info("Successfully sent email #" . ($index + 1) . " to: " . $recipient['email']);
                } catch (\Exception $e) {
                    \Log::error("Failed to send email #" . ($index + 1) . " to " . $recipient['email'] . ": " . $e->getMessage());
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
