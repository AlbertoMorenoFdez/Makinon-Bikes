<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;

class IdiomaController extends Controller
{
    /**
     * Función que cambia el idioma de la aplicación y almacena la seleccion del usuario en las cookies del navegador
     *
     * @param string $idioma
     * @param Request $request
     * @return void
     */
    public function cambiarIdioma($idioma, Request $request)
    {
        App::setLocale($idioma);
        $response = redirect()->back();
        return $response->withCookie(cookie()->forever('idioma', $idioma));
    }
}
