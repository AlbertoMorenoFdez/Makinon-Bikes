@extends('layouts.app')

@section('main')
    <div id="contenedorNuevosProductos">

        <h2 class="mt-0 mb-4 text-left">Productos de segunda mano</h2>
        <p>En esta sección podrá encontrar productos de nuestros clientes que han sido revisados por nosotros y puestos a la
            venta con la garantía de Makinon Bikes.</p>
        <hr>
        <div id="contenedorNuevasCards">
            @for ($i = 0; $i < 4; $i++)
                <div class="card m-2 hover-card shadow-sm" style="flex: 0 0 auto; padding:20px">
                    <a style="color:black; text-decoration:none;">
                        <h6 class="card-title" style="color:rgb(93, 93, 93)"></h6>
                        <h5 class="card-title h-12"></h5>
                        <img src="{{ asset('./images/dibujo_bici2.png') }}" class="card-img-top img-fluid"
                            style="height: 200px; object-fit: contain;">
                        <div class="card-body" style="padding:0">
                            <p class="card-text mt-3" style="height: 70px; text-align:left ">
                            </p>
                            <p class="card-text fs-5" style="text-align:right">@lang('makinon.pvprec') €
                            </p>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
@endsection
