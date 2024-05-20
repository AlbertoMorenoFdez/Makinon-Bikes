@extends('layouts.app')

@section('main')
    <x-makinon-menu-lateral :marcas="$marcas"/>

    <div id="contenedorProductos" >
        <div id="contenedorCardsTipos">

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo','barrita') }}">
                        <img src="{{ asset('images/alimentacion/barrita.jpg') }}" class="card-img-top img-fluid"
                            style="height: 200px; object-fit: fit;" alt="bicicletas">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">BARRITAS</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo','gel') }}">
                        <img src="{{ asset('images/alimentacion/gel.webp') }}" class="card-img-top img-fluid"
                            style="height: 200px; object-fit: fit;" alt="bicicletas">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">GELES</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="card m-5 hover-card shadow-sm">
                    <a style="color:black; text-decoration:none;" href="{{ route('productos.tipo','hidratacion') }}">
                        <img src="{{ asset('images/alimentacion/hidratacion.jpg') }}" class="card-img-top img-fluid"
                            style="height: 200px; object-fit: fit;" alt="bicicletas">
                        <div class="card-body" style="padding:0; margin-top:10px; text-align:center">
                            <h5 class="card-title">HIDRATACIÓN</h5>
                        </div>
                    </a>
                </div>
            </div>

            

        </div>

    </div>
@endsection
