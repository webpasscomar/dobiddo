<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrganismMailSent extends Mailable
{
  use Queueable, SerializesModels;

  public $email, $fullName;
  /**
   * Create a new message instance.
   */
  public function __construct($email, $fullName)
  {
    $this->email = $email;
    $this->fullName = $fullName;
  }

  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope
  {
    return new Envelope(
      subject: 'Dobiddo',
      to: $this->email,
    );
  }

  /**
   * Get the message content definition.
   */
  public function content(): Content
  {
    return new Content(
      view: 'emails.organism-sent',
      with: [
        'fullName' => $this->fullName,
        'email' => $this->email
      ]
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
