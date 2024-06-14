<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PedidoDetalle;
use App\Models\Factura;
use App\Models\Pedido;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\PDF;


class FacturaController extends Controller
{
    /**
     * Función que genera la factura de un pedido en base a la id de la factura
     * 
     * @param int $id_factura
     * @return void
     */

    public function generarFactura($id_factura)
    {
        $factura = Factura::where('id_factura', $id_factura)->first();

        if (!$factura) {
            abort(404, 'La factura no existe.');
        }

        $pedido = $factura->pedido;
        $totalpedido = $pedido->total;
        $usuario = $factura->usuario;
        $detalles = PedidoDetalle::where('id_pedido', $pedido->id_pedido)->get();
        $datosFactura = [];

        // Comprobamos si el usuario autenticado es el que hizo el pedido o si es un administrador
        if (Auth::id() !== $pedido->id_usuario) {
            abort(403, 'No tienes permiso para ver esta factura.');
        }

        foreach ($detalles as $detalle) {
            $datosFactura[] = [
                'tipo_producto' => $detalle->producto->tipo,
                'marca' => $detalle->producto->marca->nombre,
                'nombre_producto' => $detalle->producto->nombre,
                'cantidad' => $detalle->cantidad,
                'precio_unitario' => $detalle->precio,
                'precio_total' => $detalle->cantidad * $detalle->precio,
            ];
        }

        //Establecemos los gsatos de envio
        $gastosEnvio = $totalpedido >= 50 ? 0 : 20;

        // Obtenemos el número de la factura y los datos del usuario
        $numeroFactura = $factura->id_factura;
        $id_pedido = $pedido->id_pedido;
        $fechaFactura = $factura->fecha;
        $totalFactura = $factura->total;

        // Pasamos los datos a la vista
        return view('factura.factura', [
            'datosFactura' => $datosFactura,
            'numeroFactura' => $numeroFactura,
            'idPedido' => $id_pedido,
            'usuario' => $usuario,
            'fechaFactura' => $fechaFactura,
            'gastosEnvio' => $gastosEnvio,
            'totalFactura' => $totalFactura,
        ]);
    }

    /**
     * Función que genera la factura de un pedido en base al id del pedido
     * 
     * @param int $id_pedido
     * @return void
     */
    public function generarFacturaPorPedido($id_pedido)
    {
        $pedido = Pedido::where('id_pedido', $id_pedido)->first();


        if (!$pedido) {
            abort(404, 'El pedido no existe.');
        }

        $factura = $pedido->factura;
        if (!$factura) {
            abort(404, 'La factura no existe.');
        }


        $pedido = $factura->pedido;
        $totalpedido = $pedido->total;
        $usuario = $factura->usuario;
        $detalles = PedidoDetalle::where('id_pedido', $pedido->id_pedido)->get();
        $datosFactura = [];

        // Comprobamos si el usuario autenticado es el que hizo el pedido o si es un administrador
        if (Auth::id() !== $pedido->id_usuario && Auth::user()->rol !== 'admin') {
            abort(403, 'No tienes permiso para ver esta factura.');
        }

        foreach ($detalles as $detalle) {
            $datosFactura[] = [
                'tipo_producto' => $detalle->producto->tipo,
                'marca' => $detalle->producto->marca->nombre,
                'nombre_producto' => $detalle->producto->nombre,
                'cantidad' => $detalle->cantidad,
                'precio_unitario' => $detalle->precio,
                'precio_total' => $detalle->cantidad * $detalle->precio,
            ];
        }

        //Establecemos los gastos de envio
        $gastosEnvio = $totalpedido >= 50 ? 0 : 20;

        // Obtenemos el número de la factura y los datos del usuario
        $numeroFactura = $factura->id_factura;
        $id_pedido = $pedido->id_pedido;
        $fechaFactura = $factura->fecha;
        $totalFactura = $factura->total;

        // Pasamos los datos a la vista
        return view('factura.factura', [
            'datosFactura' => $datosFactura,
            'numeroFactura' => $numeroFactura,
            'idPedido' => $id_pedido,
            'usuario' => $usuario,
            'fechaFactura' => $fechaFactura,
            'gastosEnvio' => $gastosEnvio,
            'totalFactura' => $totalFactura,
        ]);
    }

    /**
     * Función que descarga la factura en formato PDF
     * 
     * @param int $id_factura
     * @return void
     */

    public function descargarFactura($id_factura)
    {
        $factura = Factura::findOrFail($id_factura);
        $pdf = SnappyPdf::loadView('factura.factura', ['factura' => $id_factura]);
        return $pdf->download('factura.pdf');
    }


    /**
     * Función que descarga la factura en formato PDF en base al id del pedido
     * 
     * @param int $id_pedido
     * @return void
     */

    public function descargarFacturaPorPedido($id_pedido)
    {
        $pedido = Pedido::where('id_pedido', $id_pedido)->first();

        if (!$pedido) {
            abort(404, 'El pedido no existe.');
        }

        $factura = $pedido->factura;
        if (!$factura) {
            abort(404, 'La factura no existe.');
        }

        $pedido = $factura->pedido;
        $totalpedido = $pedido->total;
        $usuario = $factura->usuario;
        $detalles = PedidoDetalle::where('id_pedido', $pedido->id_pedido)->get();
        $datosFactura = [];

        // Comprobamos si el usuario autenticado es el que hizo el pedido o si es un administrador
        if (Auth::id() !== $pedido->id_usuario && Auth::user()->rol !== 'admin') {
            abort(403, 'No tienes permiso para ver esta factura.');
        }

        foreach ($detalles as $detalle) {
            $datosFactura[] = [
                'tipo_producto' => $detalle->producto->tipo,
                'marca' => $detalle->producto->marca->nombre,
                'nombre_producto' => $detalle->producto->nombre,
                'cantidad' => $detalle->cantidad,
                'precio_unitario' => $detalle->precio,
                'precio_total' => $detalle->cantidad * $detalle->precio,
            ];
        }

        //Establecemos los gastos de envio
        $gastosEnvio = $totalpedido >= 50 ? 0 : 20;

        // Obtenemos el número de la factura y los datos del usuario
        $numeroFactura = $factura->id_factura;
        $id_pedido = $pedido->id_pedido;
        $fechaFactura = $factura->fecha;
        $totalFactura = $factura->total;

        // Pasamos los datos a la vista
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('factura.factura_descargable', [
            'datosFactura' => $datosFactura,
            'numeroFactura' => $numeroFactura,
            'idPedido' => $id_pedido,
            'usuario' => $usuario,
            'fechaFactura' => $fechaFactura,
            'gastosEnvio' => $gastosEnvio,
            'totalFactura' => $totalFactura,
        ])->render());

        $dompdf->render();
        return $dompdf->stream('factura.pdf');
    }
}
