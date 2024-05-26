<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaTallerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Rutas para la gestión de las citas en el taller
 */
Route::middleware('auth:sanctum')->get('/traerDatos', [CitaTallerController::class, 'traerDatosUsuario']);
Route::middleware('auth:sanctum')->post('/cita_taller', [CitaTallerController::class, 'crearCita']);
Route::middleware('auth:sanctum')->get('/cita_taller', [CitaTallerController::class, 'obtenerCitas']);
Route::middleware('auth:sanctum')->get('/obtenerCitaId/{id_cita_taller}', [CitaTallerController::class, 'obtenerCitaId']);
Route::middleware('auth:sanctum')->put('/cita_taller', [CitaTallerController::class, 'editarCita']);
Route::middleware('auth:sanctum')->put('/citaPendiente', [CitaTallerController::class, 'editarEstadoCita']);
Route::middleware('auth:sanctum')->delete('/cita_taller', [CitaTallerController::class, 'eliminarCita']);
Route::middleware('auth:sanctum')->post('/subir_imagen', [CitaTallerController::class, 'subirImagen']);

Route::middleware('auth:sanctum')->get('/calendario', [CitaTallerController::class, 'calendarioCitas']);

Route::middleware('auth:sanctum')->get('files', [CitaTallerController::class, 'subirImagen']);



/* Route::post('/citaTaller', [CitaTallerController::class, 'crearCita']);
Route::middleware('auth:sanctum')->get('/citaTaller', [CitaTallerController::class, 'obtenerCitas']);
Route::put('/citaTaller', [CitaTallerController::class, 'editarCita']);
Route::delete('/citaTaller', [CitaTallerController::class, 'eliminarCita']); */
