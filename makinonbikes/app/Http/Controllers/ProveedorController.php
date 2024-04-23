<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{

    /**
     * Funcion que nos devuelve todos los datos de los proveedor.
     */

    public function datosProveedores()
    {
        $proveedores = Proveedor::paginate(10);
        return view('proveedor.listadoProveedores', ['proveedores' => $proveedores]);
    }

    /**
     * Funcion que nos devuelve todos los datos de un proveedor en concreto
     */

    public function datosProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view('datosProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Función que nos devuelve la vista de la ficha de un proveedor para el administrador
     */
    public function fichaProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.fichaProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Funcion que nos devuelve la vista para añadir un nuevo proveedor
     */
    public function nuevoProveedor()
    {
        return view('proveedor.añadirProveedor');
    }

    /**
     * Funcion para añadir un nuevo proveedor
     */
    public function agregarProveedor(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'cif' => 'required|string|regex:/^[a-zA-Z][0-9]{8}$/',
            'direccion' => 'required|string|max:500',
            'telefono' => 'required|string|min:9|max:9',
            'email' => 'required|string|email|max:200',
            'comentario' => 'string|max:1000',
        ]);

        //dd($request->all());

        $proveedor = new Proveedor;
        $proveedor->nombre = $request->nombre;
        $proveedor->cif = $request->cif;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->comentario = $request->comentario;

        $proveedor->save();


        // Redirigir a la página principal con un mensaje de éxito
        return redirect('/listadoProveedores')->with('success', 'Proveedor añadido con éxito');
    }

    /**
     * Funcion que nos devuelve la vista para editar los datos del proveedor
     */

    public function editarProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.modificarProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Funcion que nos permite pasar los datos del proveedor a la vista para poder modificarlos
     */
    public function modificarProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view('modificarProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Funcion que nos permite actualizar los datos del proveedor
     */

    public function updateProveedor(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'cif' => 'required|string|regex:/^[a-zA-Z][0-9]{8}$/',
            'direccion' => 'required|string|max:500',
            'telefono' => 'required|string|min:9|max:9',
            'email' => 'required|string|email|max:200',

        ]);

        $proveedor = Proveedor::find($request->id);
        $proveedor->nombre = $request->nombre;
        $proveedor->cif = $request->cif;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->comentario = $request->comentario;

        $proveedor->save();

        return redirect()->route('listadoProveedores')->with('success', 'Proveedor modificado con éxito');
    }

    /**
     * Funcion que nos permite eliminar un proveedor
     */
    public function eliminarProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect()->route('listadoProveedores')->with('success', 'Proveedor eliminado con éxito');
    }

    /**
     * Funcion que nos permite buscar un proveedor
     */
    public function buscarProveedor(Request $request)
    {
        $proveedores = Proveedor::where('nombre', 'like', '%' . $request->busqueda . '%')->paginate(10);
        return view('proveedor.listadoProveedores', ['proveedores' => $proveedores]);
    }
}
