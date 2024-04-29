@extends('layouts.app')

@section('main')

    {{-- Muestra la ficha del producto completo al usuario --}}

    <div class="card w-3/4 h-100  boder border-0">

        <div class="card-body">
            <div class="row">
                <div class="col-md-7 flex items-center justify-center">
                    <img src="{{ asset('images/productos/' . $producto->imagen) }}"
                        class="img-fluid w-100 hover:scale-110 transition-all duration-1000 cursor-pointer object-cover hover:-translate-x-20"
                        alt="{{ $producto->tipo }}" style="max-height: 650px;">
                </div>

                <div class="col-md-4 border-start p-4">
                    <p style="text-align: center; font-size:x-large"><strong>{{ strtoupper($producto->marca->nombre) }}
                            {{ strtoupper($producto->nombre) }}</strong> </p>

                    <div class="ps-4 pe-4 mb-5">
                        <p style="color:grey"> {{ $producto->descripcion_corta }}</p>
                    </div>

                    <p style="color:grey">@lang('makinon.colores')</p>
                    <div class="border-bottom border-top d-flex align-items-center">
                        @if (isset($producto->producto_color_talla) && $producto->producto_color_talla)
                            @foreach ($producto->producto_color_talla as $productoColorTalla)
                                <div class="mt-2 mb-2 me-2"
                                    style="width: 30px; height: 30px; background-color: {{ trim($productoColorTalla->color->color) }}; border: 1px solid black; border-radius: 50%;"
                                    title="{{ trim($productoColorTalla->color->color) }}">
                                </div>
                            @endforeach
                        @else
                            <p class="mt-2 mb-2">Color no especificado</p>
                        @endif
                    </div>

                    <br>
                    <p style="color:grey">@lang('makinon.tallas')</p>
                    <div class="border-bottom border-top d-flex align-items-center">
                        @if (isset($producto->producto_color_talla) && $producto->producto_color_talla)
                            <select name="talla" id="talla" class="mt-2 mb-2 rounded w-40">
                                @foreach ($producto->producto_color_talla as $productoColorTalla)
                                    <option value="{{ trim($productoColorTalla->talla->talla) }}">
                                        {{ trim($productoColorTalla->talla->talla) }}</option>
                                @endforeach
                            </select>
                        @else
                            <p class="mt-2 mb-2">Talla no especificada</p>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('añadirAlCarrito', $producto->id_producto) }}">
                        @csrf
                        <input type="hidden" name="id_producto" value="{{ $producto->id_producto }}">
                        <input type="hidden" name="marca" value="{{ $producto->marca->nombre }}">
                        <input type="hidden" name="nombre" value="{{ $producto->nombre }}">
                        <input type="hidden" name="imagen" value="{{ $producto->imagen }}">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="precio" value="{{ $producto->precio }}">
                        <div class="d-flex align-items-center mt-4 mb-10" id="cantidad" style="color:grey">
                            <p class="mb-0">@lang('makinon.cantidad')</p>
                            <div class="input-group input-group-sm justify-content-evenly">
                                <span class="material-symbols-outlined"> add_box </span>
                                <input class="h-6 w-20" type="number" name="cantidad" id="cantidad" min="1"
                                    max="10" value="1">
                                <span class="material-symbols-outlined"> indeterminate_check_box </span>
                            </div>
                        </div>
                        <div>
                            @if ($productoColorTalla->stock >= 2)
                                <p style="color:rgb(21, 219, 31)">@lang('makinon.disponible')</p>
                            @elseif ($productoColorTalla->stock >= 1)
                                <p style="color:rgb(255, 145, 0)">@lang('makinon.ultUnid')</p>
                            @else
                                <p style="color:red">@lang('makinon.sinStock')</p>
                            @endif
                        </div>

                        <p class="fs-4">P.V.P. {{ $producto->precio }} €</p>

                        <div class="d-flex justify-content-center col-9 mx-auto">
                            <x-makinon-primary-button type="submit"
                                style="width:80%">@lang('makinon.anadirCarro')</x-makinon-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-md-10 align-items-center">
                    </br>
                    <p style="text-align: left; font-size: large">
                        <strong>{{ strtoupper(__('makinon.descripcion')) }}</strong>
                    </p>
                    <p style="text-align: left; font-size: medium; ">{!! nl2br(e($producto->descripcion_larga)) !!}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
