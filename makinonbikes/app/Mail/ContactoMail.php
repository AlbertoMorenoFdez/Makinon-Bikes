<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contacto;

    /**
     * Create a new message instance.
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * Esta función crea un nuevo objeto Envelope con el asunto del correo electrónico establecido en 'Contacto'.
     *
     * @return Envelope Devuelve un objeto Envelope con el asunto del correo electrónico.
     */
    public function build()
    {
        return $this->view('emails.emailContacto');
    }

    
}
