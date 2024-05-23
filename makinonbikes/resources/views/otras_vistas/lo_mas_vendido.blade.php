@extends('layouts.app')

@section('main')
    <div id="contenedorNuevosProductos">

        <h2 class="mt-0 mb-4">Lo mas vendido en Makinon Bikes</h2>

        <div id="contenedorNuevasCards">
            @foreach ($productos as $producto)
                <div class="card m-2 hover-card shadow-sm" style="flex: 0 0 auto; padding:20px">
                    <a style="color:black; text-decoration:none;"href="{{ route('vistaProducto', $producto->id_producto) }}">
                        <h6 class="card-title" style="color:rgb(93, 93, 93)">{{ $producto->marca->nombre }}</h6>
                        <h5 class="card-title h-12">{{ $producto->tipo }} {{ $producto->nombre }}</h5>
                        <img src="{{ asset('images/productos/' . $producto->imagen) }}" class="card-img-top img-fluid"
                            style="height: 200px; object-fit: contain;" alt="{{ $producto->tipo }}">
                        <div class="card-body" style="padding:0">

                            <p class="card-text mt-3" style="height: 70px; text-align:left ">
                                {{ $producto->short_description }} </p>

                            <div>
                                @if ($producto->stockTotal >= 2)
                                    <p style="color:rgb(21, 219, 31)">@lang('makinon.disponible')</p>
                                @elseif ($producto->stockTotal >= 1)
                                    <p style="color:rgb(255, 145, 0)">@lang('makinon.ultUnid')</p>
                                @else
                                    <p style="color:red">@lang('makinon.sinStock')</p>
                                @endif
                            </div>

                            <p class="card-text fs-5" style="text-align:right">@lang('makinon.pvprec') {{ $producto->precio }} €
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
