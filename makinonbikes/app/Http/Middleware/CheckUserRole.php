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
     * Handle an incoming request.
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
   /* {
         Log::info('Middleware CheckUserRole ejecutado');

        if (!Auth::check()) {
            Log::info('Usuario no autenticado');
            return redirect('login');
        }

        $user = Auth::user();
        Log::info('Usuario autenticado', ['user' => $user]); // Imprime los datos del usuario

        if ($user->rol == 'admin') {
            Log::info('Usuario es admin');
            return redirect()->route('panelAdmin');
        }

        // Si el usuario no es admin, redirige a la página de bienvenida
        Log::info('Usuario no es admin');
        return redirect('welcome'); 
    }*/

    /* {
        Log::info('Middleware CheckUserRole ejecutado');
    
        // Verificar si el usuario está autenticado
        if (!Auth::check()) {
            Log::info('Usuario no autenticado');
            return redirect('login');
        }
    
        $user = Auth::user();
    
        // Verificar si el usuario tiene el rol correcto
        if ($user->rol == $rol) {
            Log::info('Usuario es ' . $rol);
            // Redirigir al panel de administrador si es admin
            if ($rol == 'admin') {
                return redirect()->route('panelAdmin');
            } else {
                // Redirigir a la página de bienvenida si no es admin
                return redirect('welcome');
            }
        }
    
        // Si el usuario no tiene el rol correcto, redirigir a la página de bienvenida
        Log::info('Usuario no es ' . $rol);
        return redirect('welcome');
    } */
}
