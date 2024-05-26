<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CitaTaller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\CitaTallerConfirmada;
use App\Mail\CitaTallerModificada;
use Illuminate\Support\Facades\Storage;


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

        // Validar los datos de la solicitud

        $request->validate([
            'opcion' => 'required|string|max:100',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i:s',
            'estado' => 'nullable|string',
            'comentario' => 'nullable|string|max:1000',
            'imagen' => 'nullable|file|image|max:2048', // 2MB Max
        ]);

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
            $destino = public_path('images/clientes_taller');
            $imagen->move($destino, $nombreImagen);
            $cita->imagen = 'images/clientes_taller/' . $nombreImagen;  // Guardar la ruta relativa de la imagen
        }

        $cita->save();


        // Enviar correo de confirmación
        Mail::to($user->email)->send(new CitaTallerConfirmada($cita));

        return response()->json($cita, 201);
    
    }

    /**
     * Función que permite editar una cita de la bdd
     *
     * @return void
     */
    public function editarCitaUsuario(Request $request)
    {
        Log::info('Solicitud recibida para editar cita', ['request' => $request->all()]);
    
        $user = $request->user();
    
        if (!$user) {
            return response()->json(['error' => 'No se pudo autenticar al usuario'], 401);
        }
    
        $request->validate([
            'id_cita_taller' => 'required|integer|exists:cita_taller,id_cita_taller',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'comentario' => 'nullable|string|max:1000',
            'imagen' => 'nullable|file|image|max:2048', // 2MB Max
            'opcion' => 'required|string',
        ]);
    
        $cita = CitaTaller::find($request->id_cita_taller);
    
        if (!$cita) {
            return response()->json(['error' => 'Cita no encontrada'], 404);
        }
    
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->comentario = $request->comentario;
        $cita->opcion = $request->opcion;
    
        if ($request->hasFile('imagen')) {
            Log::info('Imagen detectada en la solicitud', ['file' => $request->file('imagen')->getClientOriginalName()]);
    
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $destino = public_path('images/clientes_taller');
    
            if (!file_exists($destino)) {
                mkdir($destino, 0777, true);
                Log::info('Directorio de destino creado: ' . $destino);
            }
    
            $imagen->move($destino, $nombreImagen);
            $cita->imagen = 'images/clientes_taller/' . $nombreImagen;
    
            Log::info('Imagen movida y ruta asignada: ' . $cita->imagen);
        }
    
        $cita->save();
    
        Log::info('Cita guardada con éxito: ' . $cita);
    
        return response()->json($cita, 200);
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

        // Agregar la URL completa de la imagen a cada cita
        foreach ($citas as $cita) {
            if ($cita->imagen) {
                $cita->imagen_url = asset( $cita->imagen); // Usar asset para generar la URL correctamente
            }
        }

        return response()->json($citas);
    }


    /**
     * Función que permite obtener una cita por su ID
     */
    public function obtenerCitaId($id)
    {
        // Obtener el usuario autenticado
        $user = auth()->user();

        // Asegúrate de que el usuario esté autenticado
        if (!$user) {
            return response()->json(['error' => 'No se pudo autenticar al usuario'], 401);
        }

        // Buscar la cita por id_cita_taller
        $cita = CitaTaller::where('id_cita_taller', $id)->first();

        // Si la cita no existe, devolver un error
        if (!$cita) {
            return response()->json(['error' => 'Cita no encontrada'], 404);
        }

        // Devolver la cita en formato JSON
        return response()->json($cita);
    }
    /*public function obtenerCitaId($id)
     {
        // Obtener el usuario autenticado
        $user = auth()->user();

        // Asegúrate de que el usuario esté autenticado
        if (!$user) {
            return response()->json(['error' => 'No se pudo autenticar al usuario'], 401);
        }

        // Buscar la cita por ID
        $cita = CitaTaller::find($id);

        // Si la cita no existe, devolver un error
        if (!$cita) {
            return response()->json(['error' => 'Cita no encontrada'], 404);
        }

        // Devolver la cita en formato JSON
        return response()->json($cita);
    } */

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
     * Función que permite editar el esetado de varias citas del taller desde Angular
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
                $estadoOriginal = $cita->estado;
                $cita->estado = $citaData['Estado'];
                $cita->save();

                $id_usuario = $cita->usuario->id_usuario;
                $usuarios[] = $id_usuario;

                // Comprueba si el estado ha cambiado
                if ($estadoOriginal != $cita->estado) {
                    // Enviamos un correo para avisar al usuario de la actualización
                    Mail::to($cita->usuario->email)->send(new CitaTallerModificada($cita));
                }
            }
        }

        // Devuelve una respuesta exitosa
        return response()->json(['success' => 'Las citas se han actualizado correctamente', 'usuarios' => $usuarios]);
    }


    /**
     * Función que permite al administrador modificar el estado de una cita desde el listado de citas
     */
    public function modificarEstadoCita(Request $request, $id)
    {
        $cita = CitaTaller::find($id);
        $estadoOriginal = $cita->estado;
        $cita->estado = $request->estado;
        $cita->save();

        // Comprueba si el estado ha cambiado
        if ($estadoOriginal != $cita->estado) {
            // Enviamos un correo para avisar al usuario de la actualización
            Mail::to($cita->usuario->email)->send(new CitaTallerModificada($cita));
        }

        return redirect()->route('listadoCitas')->with('success', 'Estado de la cita actualizado con éxito');
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
    $citas = CitaTaller::orderBy('fecha', 'asc')->paginate(10);
    return view('taller.listadoCitasTaller', ['citas' => $citas]);
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
