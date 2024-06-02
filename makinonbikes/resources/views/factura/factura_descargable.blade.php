<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura Descargable</title>

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
        }

        td {

            padding: 8px;
            width: 50%;
        }

        h3 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        h4 {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .titulo-documento {
            text-align: center;
            margin: 25px;
        }

        .cabecera-factura {
            margin-bottom: 40px;
            width: 100%;
            border-bottom: 2px solid grey
        }

        .cabecera-factura td {
            padding: 2px;
        }

        .tabla-derecha {
            height: auto;
            text-align: right;
        }

        .tabla-izquierda {
            height: auto;
            text-align: left;
        }

        .cuerpo-factura {
            margin-bottom: 40px;
        }

        .cuerpo-factura table {
            width: 100%;
            border-collapse: collapse;
        }

        .cuerpo-factura td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .cuerpo-factura #cabecera-producto {
            text-align: center;
            background-color: black;
            color: white;
        }

        #numeros {
            text-align: right;
        }

        footer {
            border-top: 2px solid grey;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin-top: 5px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="titulo-documento">
        <h1>Makinon Bikes</h1>
    </div>
    <div class="cabecera-factura">
        <table>
            <tr>
                <td style="vertical-align: top;">
                    <table class="tabla-izquierda">
                        <tr>
                            <td>
                                <h3 colspan="4">FACTURA</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>Nº Factura: {{ $numeroFactura }}</td>
                        </tr>
                        <tr>
                            <td>Pedido: {{ $idPedido }}</td>
                        </tr>
                        <tr>
                            <td>Fecha: {{ $fechaFactura }}</td>
                        </tr>
                    </table>

                </td>
                <td style="vertical-align: top;">

                    <table class="tabla-derecha">
                        <tr>
                            <td>
                                <h3>CLIENTE</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ $usuario->nombre }} {{ $usuario->apellidos }}</td>
                        </tr>
                        <tr>
                            <td>NIF: {{ $usuario->nif }}</td>
                        </tr>
                        <tr>
                            <td>{{ $usuario->direccion }}, {{ $usuario->cp }}, {{ $usuario->ciudad }}</td>

                        </tr>
                        <tr>

                            <td>{{ $usuario->telefono }}</td>
                        </tr>
                        <tr>
                            <td>{{ $usuario->email }}</td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>


    </div>
    <div class="cuerpo-factura">
        <table>
            <tr>
                <td id="cabecera-producto">
                    <h4>PRODUCTO</h4>
                </td>
                <td id="cabecera-producto">
                    <h4>CANTIDAD</h4>
                </td>
                <td id="cabecera-producto">
                    <h4>PRECIO UNITARIO</h4>
                </td>
                <td id="cabecera-producto">
                    <h4>PRECIO TOTAL</h4>
                </td>
            </tr>
            @foreach ($datosFactura as $producto)
                <tr>
                    <td>{{ $producto['tipo_producto'] }} {{ $producto['marca'] }} {{ $producto['nombre_producto'] }}
                    </td>
                    <td id="numeros">{{ $producto['cantidad'] }}</td>
                    <td id="numeros">{{ number_format($producto['precio_unitario'] / 1.21, 2) }} €</td>
                    <td id="numeros">{{ number_format($producto['precio_total'] / 1.21, 2) }} €</td>
                </tr>
            @endforeach

            <tr>
                <td colspan="3" id="numeros">Gastos de envío:</td>
                <td id="numeros">{{ number_format($gastosEnvio / 1.21, 2) }} €</td>
            </tr>
            <tr>
                <td colspan="3" id="numeros">21% IVA:</td>
                <td id="numeros">{{ number_format($totalFactura - $totalFactura / 1.21, 2) }} €</td>
            <tr>
                <td colspan="3" id="numeros">TOTAL:</td>
                <td id="numeros">{{ $totalFactura }} €</td>
            </tr>
        </table>
    </div>

    <footer>
        <p><strong><span>Makinon Bikes S.L</span></strong></p>
        <p>CIF: B-12345678</p>
        <p>C. La Boheme, 8, 29006 Málaga</p>
        <p>Teléfono: 952 33 95 58</p>
        <p>Email: new.makinonbikes@gmail.com </p>
    </footer>

</body>

</html>
