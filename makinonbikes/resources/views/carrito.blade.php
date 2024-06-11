@extends('layouts.app')

@section('main')
    <!-- Muestra el carrito de la compra con los productos añadidos -->
    <div class="contenedor-carrito">
        <div class="productos-carrito">
            <h2>{{ strtoupper(__('carrito.tuCestaCompra')) }}</h2>
            <div id="cabecera-resumen">
                <p>{{ strtoupper(__('carrito.producto')) }}</p>
                <p></p>
                <p>{{ strtoupper(__('carrito.cantidad')) }}</p>
                <p>{{ strtoupper(__('carrito.precioUD')) }}</p>
                <p>{{ strtoupper(__('carrito.precioTotal')) }}</p>
                <p></p>
            </div>
            @foreach ($carrito as $item)
                <div id="lineas-productos">
                    <img src="{{ asset('images/productos/' . $item['imagen']) }}" alt="Imagen del producto">
                    <div class="ml-2">
                        <p class="mb-2">{{ $item['marca'] }} {{ $item['nombre'] }}</p>
                        <p class="mb-2">Talla: {{ $item['talla'] }}</p>
                        <p class="mb-2">Color: {{ isset($item['color']) ? $item['color'] : 'No especificado' }}</p>
                    </div>
                    <p>{{ $item['cantidad'] }}</p>
                    <p>{{ $item['precio'] }} €</p>
                    <p>{{ $item['cantidad'] * $item['precio'] }} €</p>

                    <form method="POST" action="{{ route('eliminarDelCarrito') }}">
                        @csrf
                        @method('DELETE')
                        @if (isset($item['id_producto']))
                            <input type="hidden" name="id_producto" value="{{ $item['id_producto'] }}">
                            <input type="hidden" name="id_color" value="{{ $item['id_color'] }}">
                            <input type="hidden" name="id_talla" value="{{ $item['id_talla'] }}">
                            <input type="hidden" name="color" value="{{ $item['color'] }}">
                            <input type="hidden" name="talla" value="{{ $item['talla'] }}">
                        @endif
                        <button type="submit"><span class="material-symbols-outlined">
                                delete
                            </span></button>
                    </form>
                </div>
            @endforeach

            @if (session('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
            @endif

        </div>



        <div class="resumen-pago">
            <h2 id="titulo-resumen">{{ strtoupper(__('carrito.resumenPedido')) }}</h2>
            <div id="importe-gastos">
                <div class="d-flex justify-content-between">
                    <p class="text-secondary mb-0">{{ strtoupper(__('carrito.valorT')) }}</p>
                    <p class="text-end mb-2">{{ number_format($total, 2) }} €</p>
                </div>
                <div class="d-flex justify-content-between tex">
                    <p class="text-secondary mb-0">{{ strtoupper(__('carrito.gastosEnv')) }}</p>
                    <p class="text-end mb-2">{{ number_format($gastosEnvio, 2) }} €</p>
                </div>
            </div>
            <div id="total">
                <div class="d-flex justify-content-between mt-3">
                    <p class="text-secondary mb-0">{{ strtoupper(__('carrito.totalPedido')) }}</p>
                    <p class="text-end mb-2">{{ number_format($total + $gastosEnvio, 2) }} €</p>
                </div>
            </div>

            <div class="botones-pago">
                <x-makinon-primary-link-button href="{{ url()->previous() }}" style="width:60%; margin-bottom:10px">@lang('carrito.continuarComprando')</x-makinon-primary-link-button>
                <form action="{{ route('realizar-pedido') }}" method="POST"
                    style="width:100%; display:flex; justify-content:center">
                    @csrf

                    @if (count($carrito) > 0)
                        <x-makinon-primary-button type="submit" style="width:60%">@lang('carrito.realizarPedido')</x-makinon-primary-button>
                    @else
                        <x-makinon-primary-button type="submit" style="width:60%; background-color:lightgrey"
                            disabled>@lang('carrito.realizarPedido')</x-makinon-primary-button>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
