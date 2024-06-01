<?php

namespace App\Mail;

use App\Models\Pedido;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PedidoConfirmado extends Mailable
{
    use Queueable, SerializesModels;

    private $pedido;

    /**
     * Creación de una nueva instancia del mensaje con el pedido realizado.
     *
     * @param Pedido $pedido
     */
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    /*
    * Esta función crea un nuevo objeto Envelope con el asunto del correo electrónico establecido en 'Pedido Confirmado'.
    *
    * @return Envelope Devuelve un objeto Envelope con el asunto del correo electrónico.
    */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pedido Confirmado',
        );
    }

    /**
     * Crea el contenido del correo electrónico del pedido confirmado.
     *
     * @return Content
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.emailPedidoConfirmado',
            with: [
                'pedido' => $this->pedido,
                'numeroPedido' => $this->pedido->id_pedido,
                'name' => $this->pedido->usuario->nombre
            ],
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
