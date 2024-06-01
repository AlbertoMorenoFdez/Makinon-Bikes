@extends('layouts.app')

@section('main')
    <!-- Muestra las cards de los componentes -->
    <x-makinon-menu-lateral :marcas="$marcas" />

    <div id="contenedorProductos">
        <div id="contenedorCardsTipos" class="d-grid">

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;"
                        href="{{ route('productos.tipo', 'mando,cambio,bielas,cadena,grupo') }}">
                        <img src="{{ asset('images/componentes/transmision.webp') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="componentes transmisión">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">TRANSMISIÓN</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;"
                        href="{{ route('productos.tipo', 'maneta,pinza,disco,kit de frenos') }}">
                        <img src="{{ asset('images/componentes/frenos.jpg') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="frenos">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">FRENOS</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;"
                        href="{{ route('productos.tipo', 'ruedas de montaña,ruedas de carretera,cubierta de montaña,cubierta de carretera') }}">
                        <img src="{{ asset('images/componentes/ruedas.webp') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="ruedas y cubiertas">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">RUEDAS</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;"
                        href="{{ route('productos.tipo', 'manillar de montaña,manillar de carretera') }}">
                        <img src="{{ asset('images/componentes/manillar.jpg') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="manillares">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">MANILLARES</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;"
                        href="{{ route('productos.tipo', 'sillin,sillin antiprostatico,sillin urbano') }}">
                        <img src="{{ asset('images/componentes/sillin.jpg') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="sillines">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">SILLINES</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;"
                        href="{{ route('productos.tipo', 'tija,tija telescopica') }}">
                        <img src="{{ asset('images/componentes/tija.webp') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="tijas de sillín">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">TIJAS</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
@endsection
