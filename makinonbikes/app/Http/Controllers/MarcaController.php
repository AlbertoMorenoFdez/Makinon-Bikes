<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
  /**
   * Funcion para añadir una marca
   */

    public function nuevaMarca(Request $request){
        $marca = new Marca();
        $marca->nombre = $request->nombre;
        $marca->save();
        return redirect()->route('añadirProducto');
    }
}
