@extends('layouts.app')

@section('main')
    <div class="contenedor-carrito">
        <div class="productos-carrito">
            <h2>TU CESTA DE LA COMPRA</h2>
            <div id="cabecera-resumen">
                <p>PRODUCTO</p>
                <p></p>
                <p>CANTIDAD</p>
                <p>PRECIO UNITARIO</p>
                <p>PRECIO TOTAL</p>
                <p></p>
            </div>
            @foreach ($carrito as $item)
                <div id="lineas-productos">
                    {{-- @if (isset($item['id_producto']))
                        <p>Producto ID: {{ $item['id_producto'] }}</p>
                    @endif --}}
                    @if (isset($item['imagen']))
                        <img src="{{ asset('images/productos/' . $item['imagen']) }}" alt="Imagen del producto">
                    @endif
                    @if (isset($item['nombre']))
                        <p>{{ $item['marca'] }} {{ $item['nombre'] }}</p>
                    @endif
                    @if (isset($item['cantidad']))
                        <p>{{ $item['cantidad'] }}</p>
                    @endif
                    @if (isset($item['precio']))
                        <p>{{ $item['precio'] }} €</p>
                    @endif
                    <p>{{ $item['cantidad'] * $item['precio'] }} €</p>

                    <form method="POST" action="{{ route('eliminarDelCarrito') }}">
                        @csrf
                        @method('DELETE')
                        @if (isset($item['id_producto']))
                            <input type="hidden" name="id_producto" value="{{ $item['id_producto'] }}">
                        @endif
                        <button type="submit"><span class="material-symbols-outlined">
                                delete
                            </span></button>
                    </form>
                </div>
            @endforeach
        </div>

        <div class="resumen-pago">
            <h2 id="titulo-resumen">RESUMEN DEL PEDIDO</h2>
            <div id="importe-gastos">
                <div class="d-flex justify-content-between">
                    <p class="text-secondary mb-0">Valor total de los productos IVA incluido</p>
                    <p class="text-end mb-2">{{ number_format($total, 2) }} €</p>
                </div>
                <div class="d-flex justify-content-between tex">
                    <p class="text-secondary mb-0">Gastos de envío</p>
                    <p class="text-end mb-2">{{ number_format($gastosEnvio, 2) }} €</p>
                </div>
            </div>
            <div id="total">
                <div class="d-flex justify-content-between mt-3">
                    <p class="text-secondary mb-0">Total del pedido</p>
                    <p class="text-end mb-2">{{ number_format($total + $gastosEnvio, 2) }} €</p>
                </div>
            </div>

            <div class="botones-pago">
                <x-makinon-primary-link-button href="{{ url()->previous() }}" style="width:60%">Seguir comprando</x-makinon-primary-link-button>
                <x-makinon-primary-button type="submit" style="width:60%">Realizar Pago</x-makinon-primary-button>
            </div>
        </div>
    </div>
@endsection
