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

    /**
     * Funcion para listar todas las marcas en la vista marcas.blade
     */
    public function listarMarcas(){
        $marcas = Marca::orderBy('nombre', 'asc')->get();
        return view('otras_vistas.marcas', ['marcas' => $marcas]);
    }
}
