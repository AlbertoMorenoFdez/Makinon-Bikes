<?php

namespace App\Mail;

use App\Models\Usuario;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Crea una nueva instancia del correo de bienvenida.
     *
     * @param Usuario $user
     */
    public function __construct(Usuario $user)
    {
        $this->user = $user;
    }

    /*
    * Esta función crea un nuevo objeto Envelope con el asunto del correo electrónico establecido en 'Welcome Mail'.
    *
    * @return Envelope Devuelve un objeto Envelope con el asunto del correo electrónico.
    */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome Mail',
        );
    }

    /**
     * Construcción del correo electrónico de bienvenida y las variables que le pasamos.
     *
     * @return Content
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.emailBienvenida', with: ['name' => $this->user->nombre],
        );
    }

    /**
     * Función que nos permite adjuntar archivos.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
