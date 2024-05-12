<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TarjetaCreditoController;
use App\Models\Pedido;
use App\Models\PedidoDetalle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoConfirmado;
use App\Http\Controllers\ProductoColorTallaController;
use App\Models\Factura;

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


    public function confirmarPedido(Request $request)
    {
        $productoColorTallaController = new ProductoColorTallaController;
        //dd($request->session()->get('carrito'));
        //dd($request->all());
        try {
            // Crear un nuevo pedido
            $pedido = new Pedido;
            $pedido->id_usuario = Auth::id();
            $pedido->fecha = date('Y-m-d');
            $pedido->estado = 'pendiente';
            $pedido->comentario = $request->input('comentario');
            $pedido->total = 0;

            $pedido->save();

            // Recorrer los productos del carrito y crear una entrada en pedido_detalle para cada uno

            foreach ($request->session()->get('carrito') as $producto) {

                $detalle = new PedidoDetalle;
                $detalle->id_pedido = $pedido->id_pedido;
                $detalle->id_producto = $producto['id_producto'];
                $detalle->cantidad = $producto['cantidad'];
                $detalle->precio = $producto['precio'];
                $detalle->save();
                $color = $producto['color'];
                $talla = $producto['talla'];

                // Actualizar el stock del producto
                $productoColorTallaController->actualizarStock($producto['id_producto'], $producto['id_color'], $producto['id_talla'], $producto['cantidad']);
            }

            // Actualizar el total del pedido
            $pedido->total += $detalle->precio * $detalle->cantidad;

            // Guardar el total del pedido
            $pedido->save();

            // Si se han registrado tarjetas de credito
            if ($request->input('forma-pago') == 'tarjeta') {
                // Si se han registrado tarjetas de credito
                $tarjetaCreditoController = new TarjetaCreditoController;
                $tarjetaCreditoController->registrarTarjeta($request);
            }

            //Creamos la nueva factura
            $factura = new Factura;
            $factura->id_usuario = Auth::id();
            $factura->id_pedido = $pedido->id_pedido;
            $factura->fecha = date('Y-m-d');
            $factura->total = $pedido->total;
            $factura->save();

            // Eliminamos el carrito de la sesión
            $request->session()->forget('carrito');

            //Envio de correo de confirmación
            $user = Auth::user();
            try {
                Mail::to($user->email)->send(new PedidoConfirmado($pedido));
                Log::info('Correo de confirmación de pedido enviado');
            } catch (\Exception $e) {
                Log::error('Error al enviar correo de confirmación de pedido: ' . $e->getMessage());
            }

            // Redirección al usuario a una página de confirmación
            return redirect()->route('pedido-confirmado')->with('success', 'Pedido realizado con éxito');
        } catch (\Exception $e) {
            Log::error('Error al crear el pedido: ' . $e->getMessage());
            return redirect()->route('realizar-pedido')->with('error', 'Hubo un problema al realizar el pedido: ' . $e->getMessage());
        }
    }

    /**
     * Función que nos devuelve la vista de la confirmación de un pedido
     */
    public function pedidoConfirmado()
    {
        return view('pedido.pedido-confirmado');
    }

    /**
     * Función que nos devuelve la vista de los pedidos realizados por el usuario autentificado
     *
     * @return void
     */
    public function misPedidos()
    {
        $pedidos = Pedido::where('id_usuario', Auth::id())->get();
        return view('pedido.mis-pedidos', ['pedidos' => $pedidos]);
    }

    /**
     * Función que nos devuelve la vista del detalle de un pedido
     */
    public function pedidoDetalle($id)
    {
        $pedido = Pedido::find($id);
        $detalles = PedidoDetalle::where('id_pedido', $id)->get();
        return view('pedido.pedido-detalle', ['pedido' => $pedido, 'detalles' => $detalles]);
    }

    /**
     * Función que nos devuelve la vista del listado de todos los pedidos
     */
    public function listarPedidos()
    {
        $pedidos = Pedido::all();
        return view('pedido.listadoPedidos', ['pedidos' => $pedidos]);
    }

    /**
     * Función que nos permite modificar el estado de un pedido por parte de la Administración
     */

    public function modificarEstadoPedido(Request $request, $id)
    {
        $pedido = Pedido::find($id);
        $pedido->estado = $request->input('estado');
        $pedido->save();
        return redirect()->route('listadoPedidos')->with('success', 'Pedido actualizado con éxito');
    }
}
