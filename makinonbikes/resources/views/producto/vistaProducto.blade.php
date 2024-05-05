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
                    <form method="POST" action="{{ route('añadirAlCarrito', $producto->id_producto) }}">
                        @csrf
                        <p style="color:grey">@lang('makinon.colores')</p>
                        <div class="border-bottom border-top d-flex align-items-center">
                            @if (isset($producto->producto_color_talla) && $producto->producto_color_talla)
                                @foreach ($producto->producto_color_talla->unique('color.color') as $key => $productoColorTalla)
                                    <button type="button" id="color-button-{{ $key }}"
                                        class="mt-2 mb-2 me-2 color-button"
                                        style="width: 30px; height: 30px; background-color: {{ trim($productoColorTalla->color->color) }}; border: 1px solid black; border-radius: 50%;"
                                        title="{{ trim($productoColorTalla->color->color) }}"
                                        data-color="{{ trim($productoColorTalla->color->color) }}">
                                    </button>
                                @endforeach
                                <input type="hidden" name="color" id="color">
                            @else
                                <p class="mt-2 mb-2">Color no especificado</p>
                            @endif
                        </div>
                        {{-- <div class="border-bottom border-top d-flex align-items-center">
                            @if (isset($producto->producto_color_talla) && $producto->producto_color_talla)
                                @foreach ($producto->producto_color_talla->unique('color.color') as $productoColorTalla)
                                    <button type="button" class="mt-2 mb-2 me-2 color-button"
                                        style="width: 30px; height: 30px; background-color: {{ trim($productoColorTalla->color->color) }}; border: 1px solid black; border-radius: 50%;"
                                        title="{{ trim($productoColorTalla->color->color) }}"
                                        data-color="{{ trim($productoColorTalla->color->color) }}">
                                    </button>
                                @endforeach
                                <input type="hidden" name="color" id="color">
                            @else
                                <p class="mt-2 mb-2">Color no especificado</p>
                            @endif
                        </div> --}}
                        <br>
                        <p style="color:grey">@lang('makinon.tallas')</p>
                        <div class="border-bottom border-top d-flex align-items-center">
                            @if (isset($producto->producto_color_talla) && $producto->producto_color_talla)
                                <select name="talla" id="talla" class="mt-2 mb-2 rounded w-40">
                                    @foreach ($producto->producto_color_talla as $productoColorTalla)
                                        <option value="{{ trim($productoColorTalla->talla->talla) }}"
                                            data-stock="{{ $productoColorTalla->stock }}">
                                            {{ trim($productoColorTalla->talla->talla) }} -
                                            @if ($productoColorTalla->stock >= 2)
                                                @lang('makinon.disponible')
                                            @elseif ($productoColorTalla->stock >= 1)
                                                @lang('makinon.ultUnid')
                                            @else
                                                @lang('makinon.sinStock')
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            @else
                                <p class="mt-2 mb-2">Talla no especificada</p>
                            @endif
                        </div>
                        {{-- <div class="border-bottom border-top d-flex align-items-center">
                            @if (isset($producto->producto_color_talla) && $producto->producto_color_talla)
                                <select name="talla" id="talla" class="mt-2 mb-2 rounded w-40">
                                    @foreach ($producto->producto_color_talla as $productoColorTalla)
                                        <option value="{{ trim($productoColorTalla->talla->talla) }}">
                                            {{ trim($productoColorTalla->talla->talla) }} - @if ($productoColorTalla->stock >= 2)
                                                <p style="color:rgb(21, 219, 31)">@lang('makinon.disponible')</p>
                                            @elseif ($productoColorTalla->stock >= 1)
                                                <p style="color:rgb(255, 145, 0)">@lang('makinon.ultUnid')</p>
                                            @else
                                                <p style="color:red">@lang('makinon.sinStock')</p>
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            @else
                                <p class="mt-2 mb-2">Talla no especificada</p>
                            @endif
                        </div> --}}

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
                        {{-- <div>
                            @if ($productoColorTalla->stock >= 2)
                                <p style="color:rgb(21, 219, 31)">@lang('makinon.disponible')</p>
                            @elseif ($productoColorTalla->stock >= 1)
                                <p style="color:rgb(255, 145, 0)">@lang('makinon.ultUnid')</p>
                            @else
                                <p style="color:red">@lang('makinon.sinStock')</p>
                            @endif
                        </div> --}}
                        <br>
                        <p class="fs-4">P.V.P. {{ $producto->precio }} €</p>
                        <div class="d-flex justify-center">
                        <x-makinon-primary-button id="add-to-cart-button" type="submit"
                            style="width:80%">@lang('makinon.anadirCarro')</x-makinon-primary-button>
                        </div>
                    </form>

                    @if (session('success'))
                        <div class="alert alert-success mt-2">
                            {{ session('success') }}
                        </div>
                    @endif
                    
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

    <script>
        // Script para cambiar el color del texto que indica las unidades en stock
        document.getElementById('talla').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var stock = selectedOption.getAttribute('data-stock');
            if (stock >= 2) {
                selectedOption.style.color = 'rgb(21, 219, 31)';
            } else if (stock >= 1) {
                selectedOption.style.color = 'rgb(255, 145, 0)';
            } else if (stock == 0) {
                selectedOption.style.color = 'red';
            }
        });


        window.onload = function() {
            // Cuando sólo hay un color disponible lo selecciona automaticamente
            var colorButtons = document.getElementsByClassName('color-button');
            if (colorButtons.length === 1) {
                colorButtons[0].click();
            }
            var event = new Event('change');
            selectElement.dispatchEvent(event);
        };

        // Cuando se hace clic en un botón de color, guarda su color en el campo oculto
        document.querySelectorAll('.color-button').forEach(function(button) {
            button.addEventListener('click', function() {
                // Restablecer el borde de todos los botones a negro
                document.querySelectorAll('.color-button').forEach(function(otherButton) {
                    otherButton.style.borderColor = 'black';
                });

                this.style.borderColor = 'rgb(251,98,0)';
                this.style.borderWidth = '2px';

                // Guardar el color en el campo oculto
                document.getElementById('color').value = this.dataset.color;
            });
        });

        //Habilita o deshabilita el botón añadir al carrito en función del stock de la talla
        var selectElement = document.getElementById('talla');

        selectElement.addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var stock = selectedOption.getAttribute('data-stock');
            var button = document.getElementById('add-to-cart-button');
            if (stock > 0) {
                button.removeAttribute('disabled');
            } else {
                button.setAttribute('disabled', '');
            }
        });
    </script>
@endsection
