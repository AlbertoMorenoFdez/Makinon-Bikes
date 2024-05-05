<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TarjetaCreditoController;
use App\Models\Pedido;
use App\Models\PedidoDetalle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PedidoController extends Controller
{
    public function realizarPedido(Request $request)
    {
        if (Auth::check()) {
            // Usuario autentificado, recupera los datos del carrito y redirige al pedido
            $carrito = $request->session()->get('carrito');

            // Verifica si $carrito es null al iniciar la sesión
            if ($carrito === null) {
                // Redirige al usuario a la página de inicio
                return redirect('/');
            }

            //Calculo del total de todos los productos del carrito
            $total = 0;
            foreach ($carrito as $producto) {
                $total += $producto['precio_total'];
            }
            // Calculo de los gastos de envío
            $gastosEnvio = $total < 100 ? 20 : 0;

            // Obtenemos el usuario autentificado
            $usuario = Auth::user();

            return view('pedido', ['carrito' => $carrito, 'total' => $total, 'gastosEnvio' => $gastosEnvio, 'usuario' => $usuario]);
        } else {
            // Usuario no autentificado y redirige al login
            return redirect()->route('login');
        }
    }

    /* public function confirmarPedido(Request $request)
    {
        // Realizar el pedido
        $carrito = $request->session()->get('carrito');
        $total = 0;
        foreach ($carrito as $producto) {
            $total += $producto['precio_total'];
        }
        $gastosEnvio = $total < 100 ? 20 : 0;

        // Obtenemos el usuario autentificado
        $usuario = Auth::user();

        $tarjetaCreditoController = new TarjetaCreditoController;
        $tarjetaCreditoController->registrarTarjeta($request);

        // Eliminamos el carrito de la sesión
        $request->session()->forget('carrito');

        // Redirigimos al usuario a la página de inicio con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Pedido realizado con éxito');
    } */

    /* public function confirmarPedido(Request $request)
    {
        //dd($request->session()->get('carrito'));
        //dd($request->all());
        // Validar los datos del formulario
        /* $request->validate([
            // Aquí van tus reglas de validación
        ]); 

        // Iniciar una transacción de base de datos
        DB::beginTransaction();

        try {
            // Crear un nuevo pedido
            $pedido = new Pedido;
            // Rellenar los campos del pedido con los datos del formulario
            $pedido->id_usuario = Auth::id();
            $pedido->fecha = date('Y-m-d');
            $pedido->estado = 'pendiente'; // o cualquier estado inicial que quieras asignar
            $pedido->comentario = $request->input('comentario'); // si tienes un campo de comentario en tu formulario
            $pedido->total = 0; // inicialmente el total es 0, se actualizará con cada detalle de pedido

            $pedido->save();

            //dd($request->session()->get('carrito'));
            // Recorrer los productos del carrito y crear una entrada en pedido_detalle para cada uno
            foreach ($request->session()->get('carrito') as $producto) {
                $detalle = new PedidoDetalle;
                $detalle->id_pedido = $pedido->id;
                $detalle->id_producto = $producto['id'];
                $detalle->cantidad = $producto['cantidad'];
                $detalle->precio = $producto['precio']; // asumiendo que tienes un campo 'precio' en tu array de producto
                $detalle->save();

                // Actualizar el total del pedido
                $pedido->total += $detalle->precio * $detalle->cantidad;
            }

            // Guardar el total del pedido
            $pedido->save();

            // Si todo ha ido bien, confirmamos la transacción
            DB::commit();

            $tarjetaCreditoController = new TarjetaCreditoController;
            $tarjetaCreditoController->registrarTarjeta($request);

            // Eliminamos el carrito de la sesión
            $request->session()->forget('carrito');

            // Redirigir al usuario a una página de confirmación
            return redirect()->route('confirmar-pedido')->with('success', 'Pedido realizado con éxito');
        } catch (\Exception $e) {
            // Si algo sale mal, revertimos la transacción
            DB::rollback();

            // Redirigir al usuario a la página de pedido con un mensaje de error
            return redirect()->route('realizar-pedido')->with('error', 'Hubo un problema al realizar el pedido: ' . $e->getMessage());
        }
    } */

    public function confirmarPedido(Request $request)
    {
        try {
            // Crear un nuevo pedido
            $pedido = new Pedido;
            // Rellenar los campos del pedido con los datos del formulario
            $pedido->id_usuario = Auth::id();
            $pedido->fecha = date('Y-m-d');
            $pedido->estado = 'pendiente'; // o cualquier estado inicial que quieras asignar
            $pedido->comentario = $request->input('comentario'); // si tienes un campo de comentario en tu formulario
            $pedido->total = 0; // inicialmente el total es 0, se actualizará con cada detalle de pedido
        
            $pedido->save();
        } catch (\Exception $e) {
            // Aquí puedes manejar cualquier error que ocurra durante la creación del pedido
            // Por ejemplo, podrías registrar el error en los logs de Laravel
            Log::error('Error al crear el pedido: ' . $e->getMessage());
        }
    
    }
}
