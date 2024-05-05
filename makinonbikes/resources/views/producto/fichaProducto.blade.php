@extends('layouts.app')

@section('main')
    {{-- Muestra para el administrador la ficha completa  del producto seleccionado --}}
    <div class="card w-50">
        <div class="card-header">
            <h2>@lang('makinon.fichaProduct')</h2>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/productos/'.$producto->imagen) }}" class="img-fluid w-100" alt="{{ $producto->tipo }}">
                </div>
                <div class="col-md-6">
                    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
                    <p><strong>Tipo:</strong> {{ $producto->tipo }}</p>
                    <p><strong>Marca:</strong> {{ $producto->marca->nombre }}</p>
                    <p><strong>Proveedor:</strong>
                        {{ $producto->proveedor ? $producto->proveedor->nombre : 'No tiene proveedor' }}</p>
                    <p><strong>Talla:</strong> {{ $producto->talla }}</p>
                    <p><strong>Precio:</strong> {{ $producto->precio }} €</p>
                    <p><strong>Descripción:</strong> {{ $producto->descripcion_corta }}</p>
                    <p><strong>Descripción larga: </strong>{{$producto->long_description}}</p>
                    <p style="text-align: left"><strong>Ruta imagen: </strong> {{ $producto->imagen }}</p>
                </div>
            </div>

        </div>
        <div class="card-footer perfilbotones d-flex justify-center">
            <x-makinon-primary-link-button href="{{ route('modificarProducto', $producto->id_producto) }}" style="margin-right: 10px">
                @lang('makinon.modifProd')</x-makinon-primary-link-button>
            <form method="POST" action="{{ route('eliminarProducto', $producto->id_producto) }}">
                @csrf
                @method('DELETE')
                <x-makinon-primary-button type="submit" style="margin-right: 10px">@lang('makinon.elimProd')</x-makinon-primary-button>
            </form>
            <x-makinon-primary-link-button href="{{ route('listadoProductos') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
        </div>
    </div>
@endsection
