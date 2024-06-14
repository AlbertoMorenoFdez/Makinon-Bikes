<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;

class ProveedorController extends Controller
{

    /**
     * Función que nos devuelve todos los proveedores.
     * @return view
     */
    public function datosProveedores()
    {
        $proveedores = Proveedor::paginate(10);
        return view('proveedor.listadoProveedores', ['proveedores' => $proveedores]);
    }

    /**
     * Función que nos devuelve todos los datos de un proveedor en concreto
     * @param int $id_proveedor
     * @return view
     */
    public function datosProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view('datosProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Función que nos devuelve la vista de la ficha de un proveedor para el administrador
     * @param int $id_proveedor
     * @return view
     */
    public function fichaProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.fichaProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Función que nos devuelve la vista para añadir un nuevo proveedor
     * @return view Formulario para añadir un nuevo proveedor
     */
    public function nuevoProveedor()
    {
        return view('proveedor.añadirProveedor');
    }

    /**
     * Función para añadir un nuevo proveedor
     * @param Request Datos del formulario
     * @return view Redirige a la vista de listado de proveedores
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

        $proveedor = new Proveedor;
        $proveedor->nombre = $request->nombre;
        $proveedor->cif = $request->cif;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->comentario = $request->comentario;

        try {
            $proveedor->save();
            return redirect('/listadoProveedores')->with('success', 'Proveedor añadido con éxito');
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
                // Aquí manejas el error específico, por ejemplo, un CIF duplicado
                return Redirect::back()->withInput()->withErrors(['cif' => 'El CIF proporcionado ya está registrado.']);
            }
        }
    }

    /**
     * Función que nos devuelve la vista para editar los datos del proveedor
     * @param int $id_proveedor
     * @return view Formulario para editar los datos del proveedor
     */
    public function editarProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.modificarProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Función que nos permite pasar los datos del proveedor a la vista para poder modificarlos
     * @param Request Id_proveedor
     * @return [type] Datos del proveedor
     */
    public function modificarProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        return view('modificarProveedor', ['proveedor' => $proveedor]);
    }

    /**
     * Función que nos permite actualizar los datos del proveedor
     * @param Request Datos del formulario
     * @return view Redirige a la vista de listado de proveedores
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
     * Función que nos permite eliminar un proveedor
     * @param int $id_proveedor
     * @return view Redirige a la vista de listado de proveedores
     */
    public function eliminarProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect()->route('listadoProveedores')->with('success', 'Proveedor eliminado con éxito');
    }

    /**
     * Función que nos permite buscar un proveedor en base al nombre
     * @param Request Nombre del proveedor
     * @return view Listado de proveedores
     */
    public function buscarProveedor(Request $request)
    {
        $proveedores = Proveedor::where('nombre', 'like', '%' . $request->busqueda . '%')->paginate(10);
        return view('proveedor.listadoProveedores', ['proveedores' => $proveedores]);
    }
}
