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
    <link href="{{ asset('css/administracion.css') }}" rel="stylesheet">
    <link href="{{ asset('css/usuario.css') }}" rel="stylesheet">
    <link href="{{ asset('css/otras_vistas.css') }}" rel="stylesheet">


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

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const bannerDownBtn = document.getElementById('bannerDownBtn');
            const bannerDropdown = document.getElementById('bannerDropdown');

            bannerDownBtn.addEventListener('click', () => {
                bannerDropdown.style.display = 'flex';
                bannerDownBtn.style.display = 'none';
            });
        });
    </script>

</head>

<body>
    <div class="container-fluid" style="padding:0px">
        <header>
            <div class="top">
                <h1 class="sr-only">Makinon Bikes, tienda de ciclismo</h1>
                <div class="buscador">
                    @livewire('buscador-productos')
                </div>

                <div class="content-div">
                    <a href="{{ route('carrito') }}" title="carrito">
                        @if (session('carrito') && count(session('carrito')) > 0)
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
                <div class="d-flex justify-center" id="logoContainer">
                    <a id="logo" href=" {{ route('home') }}">
                        <img src="{{ asset('images/logo_sin_fondo.gif') }}" alt="logo de la página">
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
            <div class="containerBanner" style="font-family:Coach, sans-serif">
                <button id="bannerDownBtn" class="dropdown-btn">MENU <span class="material-symbols-outlined">
                        keyboard_arrow_down
                    </span></button>
                <div id="bannerDropdown" class="dropdown-container">
                    <a href="{{ route('productos.tipo', 'bicicleta') }}">@lang('makinon.bicicletas')</a>
                    <a href="{{ route('componentes') }}">@lang('makinon.componentes')</a>
                    <a href="{{ route('accesorios') }}">@lang('makinon.accesorios')</a>
                    <a href="{{ route('alimentacion') }}">@lang('makinon.alimentacion')</a>
                    <a href="{{ route('taller') }}">@lang('makinon.taller')</a>
                </div>
            </div>
        </header>


        <main>
            @section('main')
            @show
        </main>

        <footer>
            <div class="bottom">
                <div id="columna1" class="mb-3">
                    <div>SOPORTE</div>
                    <li><a href="{{ route('sobre_nosotros') }}">Sobre nosotros</a></li>
                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
                    <li><a href={{ route('envios_devoluciones') }}>Envío y devoluciones</a></li>
                    <li><a href="{{ route('formas_de_pago') }}">Formas de pago</a> </li>
                    <li><a href="{{ route('aviso_legal') }}">Aviso legal</a></li>
                    <li><a href="{{ route('gestion_garantias') }}">Gestión de garantías</a></li>
                    <li><a href="{{ route('uso_cookies') }}">Uso de cookies</a></li>
                    <li><a href="{{route('terminos_y_condiciones')}}">Términos y condiciones</a></li>
                </div>

                <div id="columna2">
                    <div>LO MAS TOP</div>
                    <li><a href="{{route('promociones')}}">Promociones especiales</a></li>
                    <li><a href="{{route('nuevos_productos')}}">Nuevos productos</a></li>
                    <li><a href="{{route('lo_mas_vendido')}}">¡Lo más vendido!</a></li>
                    <li><a href="{{route('marcas')}}">Nuestras marcas</a></li>
                    <li><a href="{{route('liquidacion')}}">Liquidación</a></li>
                    <li><a href="{{route('segunda_mano')}}">Segunda mano</a></li>
                </div>
                <div id="columna3">
                    <div>SIGUENOS</div><br>
                    <div><i class="fab fa-instagram"></i>
                        <a href="https://www.instagram.com/cdmakinonbikesmalaga/" target="_blanck">Instagram</a>
                    </div>
                    <br>
                    <div>
                        <i class="fa-brands fa-youtube"></i>
                        <a href="https://www.youtube.com/watch?v=aGE7yJcoNvs" target="_blanck">Youtube</a>
                    </div>
                    <br>
                    <div>
                        <i class="fa-brands fa-tiktok"></i>
                        <a href="https://www.tiktok.com/@redbullbike" target="_blanck">Tik Tok</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
