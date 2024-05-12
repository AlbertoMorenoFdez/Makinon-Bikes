<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CitaTaller;
use Illuminate\Support\Facades\Log;


class CitaTallerController extends Controller
{

    /**
     * Función que permite obtener los datos del usuario autenticado
     */
    
    public function traerDatosUsuario(Request $request)
    {    
        // Obtener el usuario autenticado
        $user = $request->user();

        // Asegúrate de que el usuario esté autenticado
        if (!$user) {
            return response()->json(['error' => 'No se pudo autenticar al usuario'], 401);
        }

        return response()->json([
            'nombre' => $request->user()->nombre,
            'email' => $request->user()->email,
            'id_usuario' => $request->user()->id_usuario
        ]);
    }


    /**
     * Función que permite crear una cita en el taller a través de la API
     *
     * @param Request $request
     * @return void
     */

    public function crearCita(Request $request)
    {
        // Obtener el usuario autenticado
        $user = $request->user();
        

        // Asegúrate de que el usuario esté autenticado
        if (!$user) {
            return response()->json(['error' => 'No se pudo autenticar al usuario'], 401);
        }

        Log::info('Datos recibidos:', ['request' => $request->all()]);

        $cita = new CitaTaller;
        $cita->id_usuario = $user->id_usuario;
        $cita->titulo = $request->titulo;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->estado = $request->estado==null ? 'pendiente' : $request->estado;
        $cita->comentario = $request->comentario;
        $cita->save();
        return response()->json($cita, 201);
    }

    /**
     * Función que permite obtener todas las citas del taller de un cliente
     *
     * @return void
     */

    public function obtenerCitas(Request $request)
    {
       
        // Obtener el usuario autenticado
        $user = $request->user();

        // Obtener todas las citas del usuario
        $citas = CitaTaller::where('id_usuario', $user->id_usuario)->get();

        return response()->json($citas);
    }

    /**
     * Función que permite editar una cita en el taller
     */

    public function editarCita(Request $request)
    {
        $cita = CitaTaller::find($request->id_cita);
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->estado = $request->estado;
        $cita->comentario = $request->comentario;
        $cita->save();

        return response()->json($cita, 200);
    }

    /**
     * Función que permite eliminar una cita en el taller
     */

    public function eliminarCita(Request $request)
    {
        $cita = CitaTaller::find($request->id_cita_taller);
        $cita->delete();

        return response()->json(null, 204);
    }
}
