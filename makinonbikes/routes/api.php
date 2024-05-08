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

Route::post('/cita_taller', [CitaTallerController::class, 'crearCita']);
Route::middleware('auth:sanctum')->get('/cita_taller', [CitaTallerController::class, 'obtenerCitas']);
Route::put('/cita_taller', [CitaTallerController::class, 'editarCita']);
Route::delete('/cita_taller', [CitaTallerController::class, 'eliminarCita']);

/* Route::post('/citaTaller', [CitaTallerController::class, 'crearCita']);
Route::middleware('auth:sanctum')->get('/citaTaller', [CitaTallerController::class, 'obtenerCitas']);
Route::put('/citaTaller', [CitaTallerController::class, 'editarCita']);
Route::delete('/citaTaller', [CitaTallerController::class, 'eliminarCita']); */
