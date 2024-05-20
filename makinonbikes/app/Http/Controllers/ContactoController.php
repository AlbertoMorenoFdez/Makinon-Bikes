<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function send(Request $request)
    {
        //dd($request->all());
        $contacto = $request->all();

        Mail::to('new.makinonbikes@gmail.com')->send(new ContactoMail($contacto));

        return redirect()->back()->with('mensaje', 'Mensaje enviado correctamente');
    }
}
