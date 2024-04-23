<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Marca;
use Illuminate\Http\Exceptions\PostTooLargeException;

class ProductoController extends Controller
{
    /**
     * Funcion que nos devuelve todos los datos de los productos para generar las cards.
     */

    public function vistasAllProductos($tipo)
    {
        $marcas = Marca::all();
        $tipos = explode(',', $tipo);

        $productos = Producto::where(function ($query) use ($tipos) {
            foreach ($tipos as $tipo) {
                $query->orWhere('tipo', 'like', '%' . $tipo . '%');
            }
        })->get();

        return view('producto.productos', ['productos' => $productos, 'marcas' => $marcas]);
    }

    /**
     * Funcion que nos devuelve los productos filtrados por marca
     */
    public function vistasPorMarca($nombreMarca)
    {
        $marca = Marca::where('nombre', $nombreMarca)->firstOrFail();
        $productos = Producto::where('id_marca', $marca->id_marca)->get();
        $marcas = Marca::all();

        return view('producto.productos', ['productos' => $productos, 'marcas' => $marcas]);
    }


    /**
     * Funcion que nos devuelve un listado de todos los productos
     */
    public function listarProductos()
    {
        $productos = Producto::paginate(10);
        return view('producto.listadoProductos', ['productos' => $productos]);
    }

    /**
     * Función que nos permite hacer la busqueda de un producto en el panel de administración
     */
    public function buscarProducto(Request $request)
    {
        $productos = Producto::where('nombre', 'like', '%' . $request->busqueda . '%')->paginate(10);
        return view('producto.listadoProductos', ['productos' => $productos]);
    }

    /**
     * Funcion que nos devuelve los datos de un producto en concreto para el administrador
     */
    public function fichaProducto($id)
    {
        $producto = Producto::find($id);
        return view('producto.fichaProducto', ['producto' => $producto]);
    }

    /**
     * Funcion que nos devuelve la vista del producto para el usuario
     */

    public function vistaProducto($id)
    {
        $producto = Producto::find($id);
        return view('producto.vistaProducto', ['producto' => $producto]);
    }

    /**
     * Funcion que nos devuelve la vista para añadir un nuevo producto
     */

    public function nuevoProducto()
    {
        $marcas = Marca::orderBy('nombre')->get();
        $proveedores = Proveedor::orderBy('nombre')->get();
        return view('producto.añadirProducto', ['marcas' => $marcas, 'proveedores' => $proveedores]);
    }

    /**
     * Funcion para añadir un nuevo producto
     */

    public function agregarProducto(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:150',
                'tipo' => 'required',
                'id_marca' => 'required',
                'id_proveedor' => 'required',
                'stock' => 'required|string|max:5',
                'color' => 'nullable|array',
                'color.*' => 'string|max:50',
                'talla' => 'required|string|max:50',
                'precio' => 'required|string|max:10',
                'descripcion_corta' => 'required|string|max:1000',
                'descripcion_larga' => 'required|string|max:10000',
                'imagen' => 'image|max:2048'
            ]);

            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->tipo = $request->tipo;
            $producto->id_marca = $request->id_marca;
            $producto->id_proveedor = $request->id_proveedor;
            $producto->stock = $request->stock;
            $producto->color = $request->color;
            $producto->talla = $request->talla;
            $producto->precio = $request->precio;
            $producto->descripcion_corta = $request->descripcion_corta;
            $producto->descripcion_larga = $request->descripcion_larga;

            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = date('His') . '_' . $imagen->getClientOriginalName();
                $destinoPath = public_path('/images/productos');
                $imagen->move($destinoPath, $nombreImagen);
                $producto->imagen = $nombreImagen;
            }

            $producto->save();

            return redirect()->route('fichaProducto', ['id' => $producto->id_producto])->with('success', 'Producto añadido con éxito');
        } catch (PostTooLargeException $e) {
            return redirect()->route('fichaProducto', ['id' => $producto->id_producto])->with('error', 'La imagen es demasiado grande. Por favor, sube una imagen de menos de 2MB.');
        }
    }

    /**
     * Funcion que nos devuelve la vista para editar los datos del producto
     *
     * @param [type] $id
     * @return void
     */
    public function editarProducto($id)
    {
        $producto = Producto::find($id);
        $marcas = Marca::orderBy('nombre')->get();
        $proveedores = Proveedor::orderBy('nombre')->get();
        return view('producto.modificarProducto', ['producto' => $producto, 'marcas' => $marcas,  'proveedores' => $proveedores]);
    }

    /**
     * Funcion que nos permite pasar los datos del producto a la vista para poder modificarlos
     */
    public function modificarProducto($id)
    {
        $producto = Producto::find($id);
        return view('modificarProducto', ['producto' => $producto]);
    }

    /**
     * Funcion que nos permite actualizar los datos del producto
     */

    public function updateProducto(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:150',
                'tipo' => 'required',
                'id_marca' => 'required',
                'id_proveedor' => 'required',
                'stock' => 'required|string|max:5',
                'color' => 'nullable|array',
                'color.*' => 'string|max:50',
                'talla' => 'required|string|max:50',
                'precio' => 'required|string|max:10',
                'descripcion_corta' => 'required|string|max:1000',
                'descripcion_larga' => 'required|string|max:10000',
                'imagen' => 'image|max:2048'
            ]);

            $producto = Producto::find($request->id);

            if ($request->has('color')) {
                $producto->color = $request->color;
            }

            $producto->nombre = $request->nombre;
            $producto->tipo = $request->tipo;
            $producto->id_marca = $request->id_marca;
            $producto->id_proveedor = $request->id_proveedor;
            $producto->stock = $request->stock;
            $producto->talla = $request->talla;
            $producto->precio = $request->precio;
            $producto->descripcion_corta = $request->descripcion_corta;
            $producto->descripcion_larga = $request->descripcion_larga;

            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = date('His') . '_' . $imagen->getClientOriginalName();
                $destinoPath = public_path('/images/productos');
                $imagen->move($destinoPath, $nombreImagen);
                $producto->imagen = $nombreImagen;
            }

            $producto->save();

            return redirect()->route('fichaProducto', ['id' => $producto->id_producto])->with('success', 'Producto modificado con éxito');
        } catch (PostTooLargeException $e) {
            return redirect()->route('fichaProducto', ['id' => $producto->id_producto])->with('error', 'La imagen es demasiado grande. Por favor, sube una imagen de menos de 2MB.');
        }
    }

    /**
     * Funcion que nos permite eliminar un producto
     */
    public function eliminarProducto($id)
    {
        $producto = Producto::find($id);

        // Así eliminamos la imagen del producto de la carpeta public/images/productos donde se almacena.
        $imagenPath = public_path('/images/productos/' . $producto->imagen);
        if (file_exists($imagenPath)) {
            unlink($imagenPath);
        }

        $producto->delete();

        return redirect('listadoProductos')->with('success', 'Producto eliminado con éxito');
    }

    /**
     * Función que nos devuelve un listado de los productos de un proveedoru
     */

    public function listarProductosProveedor($id)
    {
        $proveedor = Proveedor::find($id);
        $productos = Producto::where('id_proveedor', $id)->paginate(10);
        return view('producto.listadoProductosProveedor', ['productos' => $productos, 'proveedor' => $proveedor]);
    }


    /**
     * Función que nos devuelve las marcas de los productos
     */

    // public function listarMarcas(){
    //     $marcas = Producto::select('marca')->distinct()->get();
    //     return view('makinon-menu-lateral', ['marcas' => $marcas]);
    // }

    // public function filtrarPorMarca($marca)
    // {
    //     $productos = Producto::where('marca', 'like', '%' . $marca . '%')->get();
    //     return view('producto.productos', ['productos' => $productos]);
    // }
}
