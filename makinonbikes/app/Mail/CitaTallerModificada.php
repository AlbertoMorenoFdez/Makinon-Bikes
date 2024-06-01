<?php

namespace App\Mail;

use App\Models\CitaTaller;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;

class CitaTallerModificada extends Mailable
{
    use Queueable, SerializesModels;

    private $cita;

    /**
     * Creación de una nueva instancia del mensaje.
     *
     * @return void
     */
    public function __construct(CitaTaller $cita)
    {
        $this->cita = $cita;
    }

    /**
     * Esta función crea un nuevo objeto Envelope con el asunto del correo electrónico establecido en 'Cita en el taller modificada'.
     *
     * @return Envelope Devuelve un objeto Envelope con el asunto del correo electrónico.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Cita en el taller modificada',
        );
    }

    /**
     * Construcción del correo electrónico de la cita del taller
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.emailCitaModificada')
            ->with([
                'fecha' => $this->cita->fecha,
                'hora' => $this->cita->hora,
                'name' => $this->cita->usuario->nombre,
                'opcion' => $this->cita->opcion,
                'estado' => $this->cita->estado,
            ])
            ->subject('Cita en el taller modificada');
    }
}
