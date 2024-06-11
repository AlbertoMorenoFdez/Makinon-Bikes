@extends('layouts.app')

@section('main')
    <!-- Muestra las cards de los accesorios -->
    <x-makinon-menu-lateral :marcas="$marcas" />

    <div id="contenedorProductos">
        <div id="contenedorCardsTipos">

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo', 'gafas') }}">
                        <img src="{{ asset('images/accesorios/gafa.webp') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="gafas">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">{{ strtoupper(__('makinon.gafas')) }}</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo', 'casco') }}">
                        <img src="{{ asset('images/accesorios/casco.webp') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="cascos">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">{{ strtoupper(__('makinon.cascos')) }}</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo', 'zapatilla') }}">
                        <img src="{{ asset('images/accesorios/zapatilla.jpg') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="zapatillas">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">{{ strtoupper(__('makinon.zapatillas')) }}</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo', 'maillot') }}">
                        <img src="{{ asset('images/accesorios/maillot.jpg') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="maillots">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">{{ strtoupper(__('makinon.maillots')) }}</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo', 'culotte') }}">
                        <img src="{{ asset('images/accesorios/culotte.webp') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="culottes">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">{{ strtoupper(__('makinon.culottes')) }}</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo', 'guantes') }}">
                        <img src="{{ asset('images/accesorios/guante.webp') }}" class="card-img-top img-fluid"
                            style="height: 200px;" alt="guantes">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">{{ strtoupper(__('productos.guantes')) }}</h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
@endsection
