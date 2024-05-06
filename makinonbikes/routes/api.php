<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaTallerController;
use App\Http\Controllers\AngularController;

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

Route::post('/citaTaller', [CitaTallerController::class, 'crearCita']);
Route::middleware('auth:sanctum')->get('/citaTaller', [CitaTallerController::class, 'obtenerCitas']);
Route::put('/citaTaller', [CitaTallerController::class, 'editarCita']);
Route::delete('/citaTaller', [CitaTallerController::class, 'eliminarCita']);

