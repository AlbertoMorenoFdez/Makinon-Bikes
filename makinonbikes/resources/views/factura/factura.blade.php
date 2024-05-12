<html>

<head>
    <title>Factura</title>
    <link rel="stylesheet" href="{{ asset('css/factura.css') }}">
    <link rel="preload" as="font" href="{{ asset('fonts/Port Condensed-normal-400-100.otf') }}"
        crossorigin="anonymous">
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
