@extends('layouts.app')

@section('main')
    <div class="row w-4/5">
        <div class="card-header text-center">
            <h1>Mis Pedidos</h1>
        </div>
        <div class="col-md-14">
            <div class="mt-4">
                <div class="table-responsive">
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th scope="col">Número de pedido</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Importe</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Comentario</th>
                                <th scope="col" style="text-align:center">Detalle</th>
                                <th scope="col" style="text-align:center">Factura</th>
                                <th scope="col" style="text-align:center">Descargar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <td>{{ $pedido->id_pedido }}</td>
                                    <td>{{ $pedido->fecha }}</td>
                                    <td>{{ $pedido->total }} €</td>
                                    <td>{{ $pedido->estado }}</td>
                                    <td>
                                        @if ($pedido->comentario)
                                            {{ $pedido->comentario }}
                                        @endif
                                    </td>
                                    <td style="text-align:center">
                                        <a href="{{ route('pedido-detalle', $pedido->id_pedido) }}"><span
                                                class="material-symbols-outlined">
                                                quick_reference
                                            </span></a>
                                    </td>
                                    <td style="text-align:center">
                                        <a href="{{ route('factura-pedido', $pedido->id_pedido) }}"><span
                                                class="material-symbols-outlined">
                                                print
                                            </span></a>
                                    </td>
                                    <td style="text-align:center">
                                        <a href="{{ route('factura/descargar', $pedido->id_pedido) }}"><span
                                                class="material-symbols-outlined">
                                                download
                                            </span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <x-makinon-primary-link-button
                    href="{{ route('usuario.perfil') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
            </div>

        </div>

    </div>
@endsection
