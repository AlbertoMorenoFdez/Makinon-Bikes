<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talla;

class TallaController extends Controller
{
    /**
     * Función para recuperar todas las tallas de la tabla talla
     */
    public function obtenerTallas()
    {
        $tallas = Talla::all();
        return view('añadirProducto', ['tallas' => $tallas]);
    }

    /**
     * Función para añadir una talla
     * @param Request Datos de la talla
     * @return view Redirige a la vista de añadir producto
     */
    public function nuevaTalla(Request $request)
    {
        $talla = new Talla();
        $talla->talla = $request->talla;
        $talla->save();
        return redirect()->route('añadirProducto');
    }
}
