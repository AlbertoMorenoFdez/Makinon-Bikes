@extends('layouts.app')

@section('main')

<div class="row 4/5">
    <div class="card-header text-center">
        <h1>Detalle del pedido #{{$pedido->id_pedido}}</h1>
    </div>
    <div class="mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detalles as $detalle)
                    <tr>
                        <td>{{ $detalle->producto->nombre}}</td>
                        <td>{{ $detalle->cantidad }}</td>
                        <td>{{ $detalle->precio }} €</td>
                        <td>{{ $detalle->cantidad * $detalle->precio }} €</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-5">
            <x-makinon-primary-link-button href="{{ url()->previous() }}" style="margin-right: 10px">Volver</x-makinon-primary-link-button>
            <x-makinon-primary-link-button href="{{ route('factura-pedido', $pedido->id_pedido) }}">Ver factura</x-makinon-primary-link-button>
        </div>
    </div>
</div>


@endsection