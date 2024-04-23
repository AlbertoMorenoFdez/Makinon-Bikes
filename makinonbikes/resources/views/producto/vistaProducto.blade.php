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
                        @if (isset($producto->color) && $producto->color)
                            @foreach ($producto->color as $color)
                                <div class="mt-2 mb-2 me-2"
                                    style="width: 30px; height: 30px; background-color: {{ trim($color) }}; border: 1px solid black; border-radius: 50%;"
                                    title="{{ trim($color) }}">
                                </div>
                            @endforeach
                        @else
                            <p class="mt-2 mb-2">Color no especificado</p>
                        @endif
                    </div>

                    <br>
                    <p style="color:grey">@lang('makinon.tallas')</p>
                    <div class="border-bottom border-top d-flex align-items-center">
                        @php
                            $tallas = explode(',', $producto->talla);
                        @endphp
                        <select name="talla" id="talla" class="mt-2 mb-2 rounded w-40">
                            @foreach ($tallas as $talla)
                                <option value="{{ trim($talla) }}">{{ trim($talla) }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <form method="POST" action="{{ route('carrito.agregar') }}">
                        @csrf
                        <p style="color:grey">@lang('makinon.colores')</p>
                        <div class="border-bottom border-top d-flex align-items-center">
                            @if (isset($producto->color) && $producto->color)
                                @php
                                    $colores = explode(',', $producto->color);
                                @endphp
                                <select name="color_seleccionado" id="color_seleccionado" class="form-control mt-2 mb-2">
                                    @foreach ($colores as $color)
                                        <option value="{{ trim($color) }}" style="background-color: {{ trim($color) }};">{{ trim($color) }}</option>
                                    @endforeach
                                </select>
                            @else
                                <p class="mt-2 mb-2">Color no especificado</p>
                            @endif
                        </div>
                    
                        <br>
                        <p style="color:grey">@lang('makinon.tallas')</p>
                        <div class="border-bottom border-top d-flex align-items-center">
                            @php
                                $tallas = explode(',', $producto->talla);
                            @endphp
                            <select name="talla_seleccionada" id="talla_seleccionada" class="mt-2 mb-2 rounded w-40">
                                @foreach ($tallas as $talla)
                                    <option value="{{ trim($talla) }}">{{ trim($talla) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Agregar al carrito</button>
                    </form> --}}

                    <div class="d-flex align-items-center mt-4 mb-10" id="cantidad" style="color:grey">
                        <p class="mb-0">@lang('makinon.cantidad')</p>
                        <div class="input-group input-group-sm justify-content-evenly">
                            <span class="material-symbols-outlined"> add_box </span>
                            <input class="h-6 w-20" type="text" name="cantidad" id="cantidad" min="1"
                                max="10" value="1">
                            <span class="material-symbols-outlined"> indeterminate_check_box </span>
                        </div>
                    </div>

                    <div>
                        @if ($producto->stock >= 2)
                            <p style="color:rgb(21, 219, 31)">@lang('makinon.disponible')</p>
                        @elseif ($producto->stock >= 1)
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
