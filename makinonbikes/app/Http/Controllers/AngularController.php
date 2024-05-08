<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngularController extends Controller
{
     /* public function connectToAngular()
    {
        $token = session()->get('api_token'); // Obtén el token de la sesión
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token
        ])->get('http://localhost:4200');
        if ($response->successful()) {
            echo "Conexión exitosa a Angular";
        } else {
            echo "Error al conectar a Angular";
        }
        // Ahora puedes trabajar con la respuesta...
        $content = $response->body();
        // Devuelve la respuesta o redirige según sea necesario
        return $content;
    } */

    public function connectToAngular()
    {
        $token = session()->get('api_token'); // Obtén el token de la sesión

        // Generar el enlace a la aplicación Angular con el token incluido
        $angularAppUrl = 'http://localhost:4200';
        $angularAppLink = $angularAppUrl . '?token=' . $token;

        // Redirigir al usuario a la aplicación Angular
        return redirect()->away($angularAppLink);
    }
}
