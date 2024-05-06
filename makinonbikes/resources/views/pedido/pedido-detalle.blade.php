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
                        <td>{{ $detalle->subtotal }} €</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer perfilbotones d-flex justify-center">
            <a href="{{ route('mis-pedidos') }}" class="btn btn-primary" style="margin-right:10px">Volver</a>
        </div>
    </div>
</div>


@endsection