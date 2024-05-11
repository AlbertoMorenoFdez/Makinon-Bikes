<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductoColorTalla;

class ProductoColorTallaController extends Controller
{
    /**
     * Función que actualiza el stock de un producto
     *
     * @param [type] $id_producto
     * @param [type] $id_color
     * @param [type] $id_talla
     * @param [type] $cantidad
     * @return void
     */
    public function actualizarStock($id_producto, $id_color, $id_talla, $cantidad)
    {
        $productoColorTalla = ProductoColorTalla::where('id_producto', $id_producto)
            ->where('id_color', $id_color)
            ->where('id_talla', $id_talla)
            ->first();

        if ($productoColorTalla && $productoColorTalla->stock >= $cantidad) {
            $productoColorTalla->stock -= $cantidad;
            $productoColorTalla->save();
            return response()->json(['mensaje' => 'Stock actualizado']);
        } else {
            return response()->json(['mensaje' => 'No hay suficiente stock']);
        }
    }

    /**
     * Función que comprueba si hay stock suficiente antes de añadir al carrito 
     *
     * @param [type] $id_producto
     * @param [type] $id_color
     * @param [type] $id_talla
     * @param [type] $cantidad
     * @return void
     */
    public function comprobarStock($id_producto, $id_color, $id_talla, $cantidad)
    {
        $productoColorTalla = ProductoColorTalla::where('id_producto', $id_producto)
            ->where('id_color', $id_color)
            ->where('id_talla', $id_talla)
            ->first();

        if ($productoColorTalla && $productoColorTalla->stock >= $cantidad) {
            return true;
        } else {
            return false;
        }
    }
}
