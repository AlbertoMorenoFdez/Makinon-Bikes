<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CitaTaller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\CitaTallerConfirmada;
use App\Mail\CitaTallerModificada;
use Illuminate\Support\Facades\Storage;

/**
 * @OA\Info(
 *     title="API de Makinon Bikes",
 *     version="1.0.0",
 *     description="Esta es la API para gestionar las citas en el taller de Makinon Bikes",
 *     @OA\Contact(
 *         email="new.makinonbikes@gmail.com"
 *     ),
 * )
 * @OA\SecurityScheme(
 *   securityScheme="BearerAuth",
 *   type="http",
 *   scheme="bearer",
 *   bearerFormat="JWT",
 * )
 */


class CitaTallerController extends Controller
{

    /************************ Funciones para Laravel ************************/

    /**
     * Función que permite al administrador modificar el estado de una cita desde el listado de citas
     * @param Request Estado original de cl cita y su id
     * @return mixed Redirección a la vista de listado de citas y mail para el usuario
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
     * Función que permite editar una cita en el taller
     *
     * @param Request La solicitud que contiene los datos de la cita
     * @return void Devuelve una respuesta Json
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
     * Función que permite al administrador recuperar el listado de citas para Laravel
     * @return void Devuelve una vista con el listado de citas
     */

    public function listadoCitas()
    {
        $citas = CitaTaller::orderBy('fecha', 'asc')->paginate(10);
        return view('taller.listadoCitasTaller', ['citas' => $citas]);
    }

    /************************ Funciones para Angular ************************/

    /**
     * @OA\Get(
     *     path="/api/traerDatos",
     *     summary="Obtener los datos del usuario autenticado",
     *     @OA\Response(
     *         response=200,
     *         description="Datos del usuario",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="nombre", type="string"),
     *             @OA\Property(property="email", type="string"),
     *             @OA\Property(property="id_usuario", type="integer"),
     *             @OA\Property(property="rol", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="No se pudo autenticar al usuario",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string"),
     *         )
     *     ),
     *     security={{"BearerAuth":{}}}
     * )
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
     * @OA\Post(
     *     path="/api/cita_taller",
     *     summary="Crea una nueva cita en el taller",
     *     @OA\RequestBody(
     *         description="Datos necesarios para crear una cita",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="opcion", type="string", description="La opción de la cita"),
     *             @OA\Property(property="fecha", type="string", format="date", description="La fecha de la cita"),
     *             @OA\Property(property="hora", type="string", format="time", description="La hora de la cita"),
     *             @OA\Property(property="estado", type="string", description="El estado de la cita"),
     *             @OA\Property(property="comentario", type="string", description="El comentario de la cita"),
     *             @OA\Property(property="imagen", type="string", format="binary", description="La imagen de la cita")
     *         ),
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Cita creada exitosamente",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id", type="integer", description="El ID de la cita"),
     *             @OA\Property(property="opcion", type="string", description="La opción de la cita"),
     *             @OA\Property(property="fecha", type="string", format="date", description="La fecha de la cita"),
     *             @OA\Property(property="hora", type="string", format="time", description="La hora de la cita"),
     *             @OA\Property(property="estado", type="string", description="El estado de la cita"),
     *             @OA\Property(property="comentario", type="string", description="El comentario de la cita"),
     *             @OA\Property(property="imagen", type="string", description="La imagen de la cita")
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="No se pudo autenticar al usuario",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string", description="Mensaje de error")
     *         )
     *     ),
     * security={{"BearerAuth":{}}}
     * )
     */

    public function crearCita(Request $request)
    {
        // Obtenemos el usuario autenticado
        $user = $request->user();

        // Confirmamos de que el usuario esté autenticado
        if (!$user) {
            return response()->json(['error' => 'No se pudo autenticar al usuario'], 401);
        }

        // Validamos los datos de la solicitud
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


        // Manejamos la subida de la imagen
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
     * @OA\Post(
     *     path="/api/editarCitaUsuario",
     *     summary="Editar una cita de la bdd",
     *     @OA\RequestBody(
     *         description="Datos necesarios para editar una cita",
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id_cita_taller", type="integer"),
     *             @OA\Property(property="fecha", type="string", format="date"),
     *             @OA\Property(property="hora", type="string", format="time"),
     *             @OA\Property(property="comentario", type="string"),
     *             @OA\Property(property="imagen", type="string", format="binary"),
     *             @OA\Property(property="opcion", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Cita editada con éxito",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id_cita_taller", type="integer"),
     *             @OA\Property(property="fecha", type="string", format="date"),
     *             @OA\Property(property="hora", type="string", format="time"),
     *             @OA\Property(property="comentario", type="string"),
     *             @OA\Property(property="imagen", type="string"),
     *             @OA\Property(property="opcion", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="No se pudo autenticar al usuario",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Cita no encontrada",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string"),
     *         )
     *     ),
     * security={{"BearerAuth":{}}}
     * )
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
     * @OA\Get(
     *     path="/api/cita_taller",
     *     summary="Obtener todas las citas del taller de un cliente",
     *     @OA\Response(
     *         response=200,
     *         description="Citas obtenidas con éxito",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id_cita_taller", type="integer"),
     *                 @OA\Property(property="fecha", type="string", format="date"),
     *                 @OA\Property(property="hora", type="string", format="time"),
     *                 @OA\Property(property="comentario", type="string"),
     *                 @OA\Property(property="imagen", type="string"),
     *                 @OA\Property(property="opcion", type="string"),
     *                 @OA\Property(property="imagen_url", type="string"),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="No se pudo autenticar al usuario",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string"),
     *         )
     *     ),
     *     security={{"BearerAuth":{}}}
     * )
     */

    public function obtenerCitas(Request $request)
    {
        // Obtenemos el usuario autenticado
        $user = $request->user();

        // Obtenemos todas las citas del usuario
        $citas = CitaTaller::where('id_usuario', $user->id_usuario)->get();

        // Agregamos la URL completa de la imagen a cada cita
        foreach ($citas as $cita) {
            if ($cita->imagen) {
                $cita->imagen_url = asset($cita->imagen); // Usando asset generamos la URL correctamente
            }
        }

        return response()->json($citas);
    }


    /**
     * @OA\Get(
     *     path="/api/obtenerCitaId/{id_cita_taller}",
     *     summary="Obtener una cita por su ID",
     *     @OA\Parameter(
     *         name="id_cita_taller",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Cita encontrada",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id_cita_taller", type="integer"),
     *             @OA\Property(property="fecha", type="string", format="date"),
     *             @OA\Property(property="hora", type="string", format="time"),
     *             @OA\Property(property="comentario", type="string"),
     *             @OA\Property(property="imagen", type="string"),
     *             @OA\Property(property="opcion", type="string"),
     *             @OA\Property(property="imagen_url", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="No se pudo autenticar al usuario",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Cita no encontrada",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string"),
     *         )
     *     ),
     *     security={{"BearerAuth":{}}}
     * )
     */
    public function obtenerCitaId($id)
    {
        // Obtenemos el usuario autenticado
        $user = auth()->user();

        // Nos seguramos de que el usuario esté autenticado
        if (!$user) {
            return response()->json(['error' => 'No se pudo autenticar al usuario'], 401);
        }

        // Buscamos la cita por id_cita_taller
        $cita = CitaTaller::where('id_cita_taller', $id)->first();

        // Si la cita no existe, devolvemos un error
        if (!$cita) {
            return response()->json(['error' => 'Cita no encontrada'], 404);
        }

        // Devolvemos la cita en formato JSON
        return response()->json($cita);
    }


    /**
     * @OA\Put(
     *     path="/api/citaPendiente",
     *     summary="Edita el estado de varias citas del taller desde el panel del adminitrador de Angular",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id_cita_taller", type="integer", description="El ID de la cita del taller"),
     *                 @OA\Property(property="Estado", type="string", description="El nuevo estado de la cita")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Las citas se han actualizado correctamente",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="success", type="string", description="Mensaje de éxito"),
     *             @OA\Property(property="usuarios", type="array", @OA\Items(type="integer"), description="Array de los ID de los usuarios cuyas citas se han actualizado")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Se esperaba un array de citas",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string", description="Mensaje de error")
     *         )
     *     ),
     *     security={{"BearerAuth":{}}}
     * )
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
     * @OA\Delete(
     *     path="/api/cita_taller",
     *     summary="Elimina una cita del taller",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="id_cita_taller", type="integer", description="El ID de la cita del taller")
     *         )
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Cita eliminada con éxito"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Cita no encontrada",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="error", type="string", description="Mensaje de error")
     *         )
     *     ),
     *     security={{"BearerAuth":{}}}
     * )
     */
    public function eliminarCita(Request $request)
    {
        $cita = CitaTaller::find($request->id_cita_taller);
        $cita->delete();

        return response()->json(null, 204);
    }


    /**
     * @OA\Get(
     *     path="/api/calendario",
     *     summary="Obtiene todas las citas del taller",
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id_cita_taller", type="integer"),
     *                 @OA\Property(property="fecha", type="string", format="date"),
     *                 @OA\Property(property="hora", type="string", format="time"),
     *                 @OA\Property(property="comentario", type="string"),
     *                 @OA\Property(property="imagen", type="string"),
     *                 @OA\Property(property="opcion", type="string"),
     *                 @OA\Property(property="imagen_url", type="string"),
     *             )
     *         )
     *     ),
     *     security={{"BearerAuth":{}}}
     * )
     */
    public function calendarioCitas()
    {
        $citas = CitaTaller::all();
        return response()->json($citas);
    }


    /**
     * @OA\Put(
     *     path="/api/subir_imagen",
     *     summary="Sube una imagen para una cita del taller",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="imagen",
     *                     description="La imagen a subir",
     *                     type="string",
     *                     format="binary"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Imagen subida exitosamente",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", description="Mensaje de éxito"),
     *             @OA\Property(property="nombre_imagen", type="string", description="Nombre de la imagen subida")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="No se proporcionó ninguna imagen",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", description="Mensaje de error")
     *         )
     *     ),
     *     security={{"BearerAuth":{}}}
     * )
     */

    public function subirImagen(Request $request)
    {
        $imagen = $request->getContent();

        if ($imagen) {
            $nombreImagen = time() . '.png'; // Asegúrate de usar el formato de archivo correcto
            $destinoPath = public_path('/images/clientes_taller');
            file_put_contents($destinoPath . '/' . $nombreImagen, $imagen);

            return response()->json(['message' => 'Imagen subida exitosamente', 'nombre_imagen' => $nombreImagen], 200);
        } else {
            return response()->json(['message' => 'No se proporcionó ninguna imagen, pero la solicitud se procesó correctamente'], 200);
        }
    }

    /* public function subirImagen(Request $request)
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
    } */
}
