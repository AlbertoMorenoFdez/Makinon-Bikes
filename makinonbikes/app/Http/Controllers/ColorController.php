<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    /**
     * Función para recuperar todos los colores de la tabla color
     */
    public function obtenerColores(){
        $colores = Color::all();
        return view('añadirProducto', ['colores' => $colores]);
    }

    /**
     * Función para añadir un color
     */
    public function  nuevoColor(Request $request)
    {
        $color = new Color();
        $color->color = $request->color;
        $color->save();
        return redirect()->route('añadirProducto');
    }
}
