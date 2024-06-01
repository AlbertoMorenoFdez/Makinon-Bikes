<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductoColorTallaController;
use Illuminate\Support\Facades\Log;

class CarritoController extends Controller
{

    /**
     * Función que muestra el contenido del carrito
     *
     * @param Request $request
     * @return void
     */
    public function mostrarCarrito(Request $request)
    {
        $carrito = $request->session()->get('carrito', []);

        // Cálculo del total de todos los productos del carrito
        $total = 0;
        foreach ($carrito as $producto) {
            $total += $producto['precio_total'];
        }

        // Cálculo de los gastos de envío
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

        // Buscamos si el producto ya está en el carrito
        foreach ($carrito as &$item) {
            if ($item['id_producto'] == $request->id_producto && $item['id_color'] == $request->id_color && $item['id_talla'] == $request->id_talla) {
                // Si el producto ya está en el carrito, incrementamos la cantidad
                $item['cantidad'] += $request->cantidad;
                $item['precio_total'] = $item['cantidad'] * $item['precio'];

                // Comprobamos si hay stock suficiente
                $productoColorTallaController = new ProductoColorTallaController();
                $stockDisponible = $productoColorTallaController->comprobarStock($request->id_producto, $request->id_color, $request->id_talla, $item['cantidad']);

                if ($item['cantidad'] > $stockDisponible) {
                    // Si no hay suficiente stock, revertimos la última adición y mostramos un mensaje de error
                    $item['cantidad'] -= $request->cantidad;
                    $item['precio_total'] = $item['cantidad'] * $item['precio'];
                    return redirect()->back()->with('error', 'No puedes añadir más unidades de este producto. No hay suficiente stock.');
                }

                $request->session()->put('carrito', $carrito);
                return redirect()->back()->with('success', 'Producto añadido al carrito correctamente!');
            }
        }

        // Si el producto no está en el carrito, comprobamos si podemos añadirlo
        $productoColorTallaController = new ProductoColorTallaController();
        $stockDisponible = $productoColorTallaController->comprobarStock($request->id_producto, $request->id_color, $request->id_talla, $request->cantidad);

        if ($request->cantidad > $stockDisponible) {
            return redirect()->back()->with('error', 'No puedes añadir más unidades de este producto. No hay suficiente stock.');
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

        array_push($carrito, $producto);

        $request->session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto añadido al carrito correctamente');
    }


    /**
     * Función que elimina un producto del carrito en función del id_producto, color y talla
     *
     * @param Request $request
     * @return void
     */
    public function eliminarDelCarrito(Request $request)
    {
        $carrito = $request->session()->get('carrito', []);

        $carrito = array_filter($carrito, function ($producto) use ($request) {
            return !(
                isset($producto['id_producto']) && $producto['id_producto'] == $request->id_producto &&
                isset($producto['id_talla']) && $producto['id_talla'] == $request->id_talla &&
                isset($producto['id_color']) && $producto['id_color'] == $request->id_color
            );
        });

        $request->session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto eliminado correctamente');
    }
}
