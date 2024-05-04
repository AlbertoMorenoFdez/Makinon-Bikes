<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

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
     */
    public function añadirAlCarrito(Request $request)
    {
        $carrito = $request->session()->get('carrito', []);

        $producto = [
            'id_producto' => $request->id_producto,
            'marca' => $request->marca,
            'nombre' => $request->nombre,
            'imagen' => $request->imagen,
            'color' => $request->color,
            'talla' => $request->talla,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'precio_total' => $request->cantidad * $request->precio
        ];

        array_push($carrito, $producto);

        $request->session()->put('carrito', $carrito);

        // Añade el mensaje a la sesión
        //$request->session()->put('mensaje', 'Producto añadido al carrito');

        return redirect()->back()->with('success', 'Producto añadido al carrito correctamente');

        /* return response()->json([
        'mensaje' => 'Producto añadido al carrito'
    ]); */
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

        /* return response()->json([
            'mensaje' => 'Producto eliminado del carrito'
        ]); */
    }
}
