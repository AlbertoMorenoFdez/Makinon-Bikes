<?php

namespace App\Mail;

use App\Models\CitaTaller;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;


class CitaTallerConfirmada extends Mailable
{
    use Queueable, SerializesModels;


    private $cita;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CitaTaller $cita)
    {
        $this->cita = $cita;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmación de cita en el taller',
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
{
    return $this->view('emails.emailCitaConfirmada')
                ->with([
                    'fecha' => $this->cita->fecha,
                    'hora' => $this->cita->hora,
                    'name' => $this->cita->usuario->nombre,
                    'opcion' => $this->cita->opcion,
                    'estado' => $this->cita->estado,
                ])
                ->subject('Confirmación de cita en el taller');
}
}
