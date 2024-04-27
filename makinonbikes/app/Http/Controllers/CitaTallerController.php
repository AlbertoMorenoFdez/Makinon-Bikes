<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CitaTaller;


class CitaTallerController extends Controller
{
    /**
     * Función que permite crear una cita en el taller a través de la API
     *
     * @param Request $request
     * @return void
     */
    public function crearCita(Request $request)
    {
        $cita = new CitaTaller;
        $cita->id_usuario = $request->id_usuario;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->estado = $request->estado;
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

    public function editarCita(Request $request){
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

     public function eliminarCita(Request $request){
         $cita = CitaTaller::find($request->id_cita);
         $cita->delete();

         return response()->json(null, 204);
     }
}
