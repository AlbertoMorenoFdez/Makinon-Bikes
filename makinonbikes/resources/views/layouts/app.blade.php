<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makinon Bikes</title>

    <link rel="icon" type="image/png" href="{{ asset('bicicleta.png') }}" />

    {{-- @vite('resources/css/app.css', 'resources/js/app.js') --}}

    <link href="{{ asset('/build/assets/app-eIp774ox.css') }}" rel="stylesheet">
    <script type="module" src="{{ asset('/build/assets/app-JzZ5dANH.js') }}"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link href="{{ asset('css/tienda.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/productos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/formPre.css') }}" rel="stylesheet">
    <link href="{{ asset('css/formProveedor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/formArticulo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/formEditar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/infoProducto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/taller.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carrito.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pedido.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pedido-confirmado.css') }}" rel="stylesheet">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="preload" as="font" href="{{ asset('fonts/Port Condensed-normal-400-100.otf') }}"
        crossorigin="anonymous">
    <link rel="preload" as="font" href="{{ asset('fonts/Coach-normal-400-100.otf') }}" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid" style="padding:0px">
        <header>
            <div class="top">

                <div class="buscador">
                    @livewire('buscador-productos')
                </div>

                <div class="content-div">
                    <a href="{{ route('carrito') }}">
                        @if(session('carrito') && count(session('carrito')) > 0)
                            <i class="fas fa-cart-shopping" style="color:rgb(251,98,0)"></i>
                        @else
                            <i class="fas fa-cart-shopping" style="color:grey"></i>
                        @endif
                    </a>
                </div>

                <x-makinon-login-dropdown />

                <x-makinon-idioma-dropdown />

            </div>

            <div class="menubanner">
                <div class="d-flex justify-center">
                    <a id="logo" href=" {{ route('home') }}">
                        <img src="{{ asset('images/logo_sin_fondo.gif') }}" alt="logo">
                    </a>
                </div>

                <div class="banner" style="font-family:Coach, sans-serif">

                    <div>
                        <a href="{{ route('productos.tipo', 'bicicleta') }}">@lang('makinon.bicicletas')</a>
                    </div>

                    <div>
                        <a href="{{ route('componentes') }}">@lang('makinon.componentes')</a>
                    </div>

                    <div>
                        <a href="{{ route('accesorios') }}">@lang('makinon.accesorios')</a>
                    </div>

                    <div>
                        <a href="{{ route('alimentacion') }}">@lang('makinon.alimentacion')</a>
                    </div>
                    <div>
                        <a href="{{ route('taller') }}">@lang('makinon.taller')</a>
                    </div>
                </div>
            </div>
        </header>


        <main>
            @section('main')
            @show
        </main>

        <footer>
            <div class="bottom">
                <div id="columna1">
                    <div>SOPORTE prueba</div>
                    <li>Contacto</li>
                    <li>Nuestra tienda</li>
                    <li>Mapa de la web</li>
                    <li>Envío y devoluciones</li>
                    <li>Formas de pago</li>
                    <li>Aviso legal</li>
                    <li>Gestión de garantías</li>
                    <li>Uso de cookies</li>
                    <li>Términos y condiciones</li>
                </div>

                <div id="columna2">
                    <div>LO MAS TOP</div>
                    <li>Promociones especiales</li>
                    <li>Nuevos productos</li>
                    <li>¡Lo más vendido!</li>
                    <li>Nuestras marcas</li>
                    <li>Liquidación bicicletas</li>
                    <li>Productos ocasión</li>
                </div>
                <div id="columna3">
                    <div>SIGUENOS</div><br>
                    <div>
                        <i class="fa-brands fa-instagram"></i>
                        Instagram
                    </div><br>
                    <div>
                        <i class="fa-brands fa-youtube"></i>
                        Youtube
                    </div><br>
                    <div>
                        <i class="fa-brands fa-tiktok"></i>
                        Tik Tok
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
