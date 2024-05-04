<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function realizarPedido(Request $request){
        if(Auth::check()){
            // Usuario autentificado, recupera los datos del carrito y redirige al pedido
            $carrito = $request->session()->get('carrito');

            //Calculo del total de todos los productos del carrito
        $total = 0;
        foreach ($carrito as $producto) {
            $total += $producto['precio_total'];
        }
         // Calculo de los gastos de envío
         $gastosEnvio = $total < 100 ? 20 : 0;

         // Obtenemos el usuario autentificado
            $usuario = Auth::user();

            return view('pedido',['carrito' => $carrito, 'total' => $total, 'gastosEnvio' => $gastosEnvio, 'usuario' => $usuario]);
        }else{
            // Usuario no autentificado y redirige al login
            return redirect()->route('login');
        }
    }
}
