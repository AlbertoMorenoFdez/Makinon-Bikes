<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngularController extends Controller
{
    /**
     * Función para conectar a la aplicación Angular
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function connectToAngular()
    {
        $token = session()->get('api_token'); // Obtenemos el token de la sesión

        // Genermosr el enlace a la aplicación Angular con el token incluido
        $angularAppUrl = 'http://localhost:4200/citaTaller';
        $angularAppLink = $angularAppUrl . '?token=' . $token;

        // Redirigimos al usuario a la aplicación Angular
        return redirect()->away($angularAppLink);
    }
}
