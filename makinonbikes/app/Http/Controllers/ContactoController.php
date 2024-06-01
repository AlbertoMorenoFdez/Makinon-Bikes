<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    /**
     * Función que envía un correo a la administración desde el formulario de contacto
     *
     * @param Request Todos los parámetros del formulario de contacto
     * @return void Respuesta al usuario
     */
    public function send(Request $request)
    {
        $contacto = $request->all();

        Mail::to('new.makinonbikes@gmail.com')->send(new ContactoMail($contacto));

        return redirect()->back()->with('mensaje', 'Mensaje enviado correctamente');
    }
}
