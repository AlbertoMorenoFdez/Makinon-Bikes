<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Log;

class CheckUserRole
{
    /**
     * Middleware que comprueba si el usuario autenticado es admin
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string $rol
     */
    public function handle(Request $request, Closure $next, $rol): Response
    {
        Log::info('Middleware CheckUserRole ejecutado');

        if (!Auth::check()) {
            Log::info('Usuario no autenticado');
            return redirect('login');
        }

        $user = Auth::user();
        Log::info('Usuario autenticado', ['user' => $user]); // Imprime los datos del usuario

        if ($user->rol == $rol) {
            Log::info('Usuario es admin');
            return $next($request);
        }

        // Si el usuario no es admin, redirige a la página principal
        Log::info('Usuario no es admin');
        return redirect('/');
    }
}
