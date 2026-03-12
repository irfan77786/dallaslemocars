<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CorporateSupportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $isAdmin;

    /**
     * Create a new message instance.
     */
    public function __construct($details, $isAdmin = false)
    {
        $this->details = (array) $details;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->isAdmin 
            ? 'New Corporate Support Request from ' . ($this->details['full_name'] ?? 'User')
            : 'Thank You for Your Corporate Support Request - Dallas Black Cars';
        
        return new Envelope(
            subject: $subject
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.corporate-support',
            with: [
                'details' => $this->details,
                'isAdmin' => $this->isAdmin,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
