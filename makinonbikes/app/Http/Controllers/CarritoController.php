<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductoColorTallaController;

class CarritoController extends Controller
{
    /**
     * Función que muestra el contenido del carrito
     */

    public function mostrarCarrito(Request $request)
    {
        $carrito = $request->session()->get('carrito', []);

        //Calculo del total de todos los productos del carrito
        $total = 0;
        foreach ($carrito as $producto) {
            $total += $producto['precio_total'];
        }

        // Calculo de los gastos de envío
        $gastosEnvio = $total < 100 ? 20 : 0;

        return view('carrito', ['carrito' => $carrito, 'total' => $total, 'gastosEnvio' => $gastosEnvio]);
    }

    /**
     * Función que añade un producto al carrito
     * 
     * @param Request $request
     * 
     */
    public function añadirAlCarrito(Request $request)
    {
        $carrito = $request->session()->get('carrito', []);

        //Comprobamos si hay stock suficiente
        $productoColorTallaController = new ProductoColorTallaController();
        $stockSuficiente = $productoColorTallaController->comprobarStock($request->id_producto, $request->id_color, $request->id_talla, $request->cantidad);

        if (!$stockSuficiente) {
            return redirect()->back()->with('error', 'No hay suficiente stock');
        }

        $producto = [
            'id_producto' => $request->id_producto,
            'id_color' => $request->id_color,
            'id_talla' => $request->id_talla,
            'marca' => $request->marca,
            'nombre' => $request->nombre,
            'imagen' => $request->imagen,
            'color' => $request->color,
            'talla' => $request->talla,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'precio_total' => $request->cantidad * $request->precio
        ];

        //dd($producto);

        array_push($carrito, $producto);

        $request->session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto añadido al carrito correctamente');
    }

    /**
     * Función que elimina un producto del carrito
     */
    public function eliminarDelCarrito(Request $request)
    {
        $carrito = $request->session()->get('carrito', []);

        $carrito = array_filter($carrito, function ($producto) use ($request) {
            return isset($producto['id_producto']) && $producto['id_producto'] != $request->id_producto;
        });

        $request->session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto eliminado correctamente');
    }
}
