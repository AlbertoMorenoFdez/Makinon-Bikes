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
            'id_usuario' => $request->user()->id_usuario,
            'rol' => $request->user()->rol,
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
        $cita->opcion = $request->opcion;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->estado = $request->estado == null ? 'pendiente' : $request->estado;
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

    /**
     * Función que permite al administrador recuperar todas las citas de la tabla cita_taller en Angular
     */

    public function calendarioCitas()
    {
        $citas = CitaTaller::all();
        return response()->json($citas);
    }

    /**
     * Función que permite al administrador recuperar el listado de citas para Laravel
     */

    public function listadoCitas()
    {
        $citas = CitaTaller::paginate(10);
        return view('taller.listadoCitasTaller', ['citas' => $citas]);
    }

    /**
     * Función que permite al adminitrador modificar el estado de una cita
     */
    public function modificarEstadoCita(Request $request, $id)
    {
        $cita = CitaTaller::find($id);
        $cita->estado = $request->estado;
        $cita->save();

        return redirect()->route('listadoCitas')->with('success', 'Estado de la cita actualizado con éxito');
    }
}
