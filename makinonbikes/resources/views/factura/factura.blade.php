<html>

<head>
    <title>Factura</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/factura.css') }}"> --}}
    <link rel="preload" as="font" href="{{ asset('fonts/Port Condensed-normal-400-100.otf') }}"
        crossorigin="anonymous">

    <style>
        @font-face {
            font-family: 'Port Condensed';
            src: local('Port Condensed'), local('Port Condensed'), url("../fonts/Port Condensed-normal-400-100.otf") format('opentype');
        }

        .contenedor-factura {
            font-family: 'Port Condensed', sans-serif;
            width: 70%;
            height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 3rem;
            display: grid;
            grid-template-rows: 1fr 2fr 1fr;
            background-color: #f5f5f5;
        }

        .cabecera-factura {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            background-color: #f5f5f5;
            border-bottom: 1px solid black;
        }

        .cabecera-factura img {
            width: 250px;
            height: 150px;
        }

        .web-factura {
            display: flex;
            align-items: flex-start;
            justify-content: flex-end;
        }


        #datos-factura {
            display: flex;
            flex-direction: row;
            width: 50%;
        }

        #datos-factura p {
            margin-top: 0;
            margin-bottom: 5px;
            margin-right: 10px;
        }

        .datos-cliente-factura {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            margin-bottom: 2rem;
        }

        .datos-cliente-factura p {
            margin-top: 0;
            margin-bottom: 5px;
        }

        .cuerpo-factura {
            display: grid;
            grid-template-rows: 15% auto;
        }

        .titulo-cuerpo-factura {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            border-bottom: 1px solid black;
        }

        .titulo-cuerpo-factura p {
            margin-bottom: 0;
            font-weight: bold;

        }

        .productos-cuerpo-factura {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
        }

        .total-factura {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .total-factura p {
            width: 20%;
        }

        .total-factura p:nth-child(2) {
            border-top: solid 1px black;
            margin-bottom: 0;
        }

        .total-factura p:nth-child(1) {
            margin-bottom: 0;
        }

        .total-factura p:nth-child(3) {
            font-size: 1.5rem;
        }

        .datos-empresa {
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-top: 1px solid black;
        }

        .datos-empresa p {
            margin-bottom: 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="contenedor-factura">
        <div class="cabecera-factura">
            <div class="logo-factura">
                <img src="{{ asset('images/logo_sin_fondo.gif') }}" alt="Logo de la tienda">
            </div>
            <div class="web-factura">
                <h2>www.makinonbikes.com</h2>
            </div>

            <div class="datos-factura">
                <h2>FACTURA</h2>
                <div id="datos-factura">
                    <p>Nº Factura:</p>
                    <p>{{ $numeroFactura }}</p>
                </div>
                <div id="datos-factura">
                    <p>Pedido:</p>
                    <p>{{ $idPedido }}</p>
                </div>
                <div id="datos-factura">
                    <p>Fecha:</p>
                    <p>{{ $fechaFactura }}</p>
                </div>
            </div>

            <div class="datos-cliente-factura">
                <h2>DATOS DEL CLIENTE</h2>
                <p>{{ $usuario->nombre }} {{ $usuario->apellidos }}</p>
                <p>{{ $usuario->direccion }}</p>
                <p>{{ $usuario->cp }}, {{ $usuario->ciudad }}</p>
                <p>{{ $usuario->telefono }}</p>
                <p>{{ $usuario->email }}</p>
            </div>
        </div>

        <div class="cuerpo-factura">
            <div class="titulo-cuerpo-factura">
                <p>PRODUCTO</p>
                <p>CANTIDAD</p>
                <p>PRECIO UNITARIO</p>
                <p style="text-align: right">PRECIO TOTAL</p>
            </div>
            <div class="productos-cuerpo-factura">
                @foreach ($datosFactura as $producto)
                    <p>{{ $producto['tipo_producto'] }} {{ $producto['marca'] }} {{ $producto['nombre_producto'] }}
                    </p>
                    <p>{{ $producto['cantidad'] }}</p>
                    <p>{{ $producto['precio_unitario'] }} €</p>
                    <p style="text-align: right">{{ $producto['precio_total'] }} €</p>
                @endforeach
            </div>
        </div>
        <div class="total-factura">
            <p style="text-align: right">Gastos de envío: {{ $gastosEnvio }} €</p>
            <p></p>
            <p style="text-align: right; text">TOTAL: {{ $totalFactura }} €</p>
        </div>
        <div class="pie-factura">
            <div class="datos-empresa">
                <p>Makinon Bikes S.L</p>
                <p>CIF: B-12345678</p>
                <p>C. Frederick Terman, 3, Campanillas, 29590 Málaga</p>
                <p>Teléfono: 612 345 678</p>
                <p>Email: new.makinonbikes@gmail.com
            </div>

        </div>
</body>

</html>
