<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talla;

class TallaController extends Controller
{
    /**
     * Función para recuperar todas las tallas de la tabla talla
     */
    public function obtenerTallas(){
        $tallas = Talla::all();
        return view('añadirProducto',['tallas'=>$tallas]);
    }

    /**
     * Función para añadir una talla
     */
    public function nuevaTalla(Request $request){
        $talla = new Talla();
        $talla->talla = $request->talla;
        $talla->save();
        return redirect()->route('añadirProducto');
    }
}
