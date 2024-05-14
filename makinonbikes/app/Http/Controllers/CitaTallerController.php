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

        // Manejar la subida de la imagen
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $destino = public_path('/images/clientes_taller');
            $imagen->move($destino, $nombreImagen);
            $cita->imagen = $nombreImagen;
        }

        $cita->save();
        return response()->json($cita, 201);
    }

    /* public function crearCita(Request $request)
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
    } */

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
     * Función que permite editar el esetado de varias citas del taller
     */

     
     public function editarEstadoCita(Request $request)
     {
         // Asegúrate de que la solicitud es un array
         if (!is_array($request->all())) {
             return response()->json(['error' => 'Se esperaba un array de citas'], 400);
         }
     
         $usuarios = []; // Array para guardar los id de los usuarios
     
         // Itera sobre cada cita en el array
         foreach ($request->all() as $citaData) {
             // Busca la cita y actualiza sus datos
             $cita = CitaTaller::find($citaData['id_cita_taller']);
             if ($cita) {
                 $cita->estado = $citaData['Estado'];
                 $cita->save();
     
                 // Obtén el id_usuario a través de la relación con el usuario
                 $id_usuario = $cita->usuario->id_usuario;
     
                 // Agrega el id_usuario al array de usuarios
                 $usuarios[] = $id_usuario;
             }
         }
     
         // Devuelve una respuesta exitosa
         return response()->json(['success' => 'Las citas se han actualizado correctamente', 'usuarios' => $usuarios]);
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

    /**
     * Función que permite al usuario enviar una imagen de su bicicleta desde la aplicación de Angular
     */

    public function subirImagen(Request $request)
    {
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $destinoPath = public_path('/images/clientes_taller');
            $imagen->move($destinoPath, $nombreImagen);

            return response()->json(['message' => 'Imagen subida exitosamente', 'nombre_imagen' => $nombreImagen], 200);
        } else {
            return response()->json(['message' => 'No se proporcionó ninguna imagen'], 400);
        }
    }
}
