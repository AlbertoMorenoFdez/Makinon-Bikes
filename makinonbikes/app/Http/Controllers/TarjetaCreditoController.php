<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\TarjetaCredito;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DateTime;

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
     * Función para validar los datos de la tarejat de crédito en el proceso de compra
     */

    public function validarTarjeta(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'numero_tarjeta' => 'required|numeric|digits:16',
            'fecha_vencimiento' => [
                'required',
                'regex:/^\d{2}\/\d{2}$/',
                function ($attribute, $value, $fail) {
                    $fechaActual = new DateTime();
                    $mesActual = $fechaActual->format('m');
                    $añoActual = $fechaActual->format('y');

                    [$mes, $año] = explode('/', $value);

                    if ($año < $añoActual || ($año == $añoActual && $mes < $mesActual)) {
                        $fail($attribute . ' debe ser una fecha en el futuro.');
                    }
                },
            ],
            'nombre_titular' => 'required|string|min:3|max:255',
            'cvv' => 'required|numeric|digits:3'
        ]);

        if ($validator->fails()) {
            throw new \Exception('Los datos de la tarjeta de crédito no son válidos');
        }

        // Los datos de la tarjeta de crédito son válidos
        return response()->json(['message' => 'Los datos de la tarjeta de crédito son válidos'], 200);
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
