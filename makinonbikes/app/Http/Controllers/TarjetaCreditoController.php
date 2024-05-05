<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\TarjetaCredito;

use Illuminate\Support\Facades\Auth;

class TarjetaCreditoController extends Controller
{
    /**
     * Definimos la relacion con los usuarios
     */

    public function usuarioTitular()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    /**
     * Función para registrar una tarjeta de crédito en la base de datos
     */

    public function registrarTarjeta(Request $request)
    {
        $request->validate([
            'numero_tarjeta' => 'required|numeric|digits:16',
            'fecha_vencimiento' => 'required|regex:/^\d{2}\/\d{2}$/',
            'nombre_titular' => 'required|string',
            'cvv' => 'required|numeric|digits:3'
        ]);

        // Crear una nueva tarjeta de crédito
        $tarjetaCredito = new TarjetaCredito;
        $tarjetaCredito->id_usuario = Auth::id();
        $tarjetaCredito->numero_tarjeta = $request->input('numero_tarjeta');
        $tarjetaCredito->fecha_vencimiento = $request->input('fecha_vencimiento');
        $tarjetaCredito->nombre_titular = $request->input('nombre_titular');
        $tarjetaCredito->cvv = $request->input('cvv');

        // Guardar la tarjeta de crédito
        $tarjetaCredito->save();

        // Redirigir al usuario a la página anterior con un mensaje de éxito
        return redirect()->back()->with('success', 'Tarjeta de crédito registrada con éxito');
    }

    /**
     * Función para recuperar datos de la tarjeta de crédito
     */
    public function recuperarNumeracionTarjeta($id)
    {
        $tarjeta = TarjetaCredito::find($id);
        return view('usuario.tarjeta', ['tarjeta' => $tarjeta]);
    }
}
