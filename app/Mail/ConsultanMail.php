<?php

namespace App\Mail;

use App\Models\Country;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConsultanMail extends Mailable
{
  use Queueable, SerializesModels;

  public $data, $userEmail;

  /**
   * Create a new message instance.
   */
  public function __construct($data, $userEmail, $sectors)
  {
    $this->data = $data;
    $this->userEmail = $userEmail;
    $this->sectors = $sectors;
  }

  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope
  {
    return new Envelope(
      subject: 'Dobiddo',
      to: $this->userEmail,
      bcc: 'dobiddo@correo.com'
    );
  }

  /**
   * Get the message content definition.
   */
  public function content(): Content
  {
    return new Content(
      view: 'emails.consultans',
      with: [
        'data' => $this->data,
        'sectors' => $this->sectors
      ],
    );
  }

  /**
   * Get the attachments for the message.
   *
   * @return array<int, \Illuminate\Mail\Mailables\Attachment>
   */
  public function attachments(): array
  {
    return [];
  }
}
