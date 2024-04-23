<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetIdioma
{
    public function handle(Request $request, Closure $next)
    {
        $idioma = $request->cookie('idioma', 'es'); 
        App::setLocale($idioma);

        return $next($request);
    }
}