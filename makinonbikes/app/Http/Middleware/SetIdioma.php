<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetIdioma
{
    /**
     * Función que nos permite cambiar el idioma de la aplicación y mantenerla en las cookies del usuario,
     * de modo que permanece seleccionado aunque este cierre el navegador.
     *
     * @param Request $request
     * @param Closure $next
     * @return void
     */
    public function handle(Request $request, Closure $next)
    {
        $idioma = $request->cookie('idioma', 'es'); 
        App::setLocale($idioma);

        return $next($request);
    }
}