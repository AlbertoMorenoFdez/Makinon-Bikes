<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MakinonMail;
use App\Mail\WelcomeMail;
use App\Models\Usuario;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Función para enviar un mail de confirmación de registro
     *
     * @return void
     */
    public function sendWelcomeMail(Usuario $user)
    {
        $mailData = [
            'title' => 'Bienvenido a Makinon Bikes',
        ];

        Mail::to($user->email)->send(new WelcomeMail($user, $mailData));
    }
}
