<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MakinonMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    /**
     * Crea una nueva instancia del mensaje.
     *
     * @param [type] $mailData
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Función que crea un nuevo objeto Envelope con el asunto del correo electrónico establecido en 'Makinon Mail'.
     *
     * @return Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Makinon Mail',
        );
    }

    /**
     * Construcción del correo electrónico de Makinon
     *
     * @return Content
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.MakinonMail',
        );
    }

    /**
     * Función que permite adjuntar archivos
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
