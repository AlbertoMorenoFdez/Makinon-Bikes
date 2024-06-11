@extends('layouts.app')

@section('main')
    <!-- Muestra la vista de la compra de los productos y el proceso -->
    <div class="compra">
        <form method="POST" action="{{ route('confirmar-pedido') }}">
            @csrf
            <div class="progreso-compra">
                <div class="paso-clickeable-datos">
                    <span>@lang('pedido.misDatos')</span>
                </div>
                <div class="paso-clickeable-pago">
                    <span>@lang('pedido.formaPago')</span>
                </div>
                <div class="paso-clickeable-confirm" disabled>
                    <span>@lang('pedido.confirmarDatos')</span>
                </div>
            </div>

            <div class="contenedor-slide">
                <div class="contenedor-pedido">
                    <div class="datospersonales">
                        <div class="titulo-datos-personales">{{ strtoupper(__('pedido.datosP')) }}</div>
                        <div class="emailpedido">
                            <label>@lang('pedido.email')</label>
                            <p>{{ $usuario->email }}</p>
                        </div>
                        <div class="telefonopedido">
                            <label>@lang('pedido.tlfno')</label>
                            <p>{{ $usuario->telefono }}</p>
                        </div>
                        <div class="direccion-envio">{{ strtoupper(__('pedido.direccEnv')) }}</div>
                        <div class="nombrepedido">
                            <label>@lang('pedido.nombre')</label>
                            <p>{{ $usuario->nombre }}</p>
                        </div>
                        <div class="apellidospedido">
                            <label>@lang('pedido.apellidos')</label>
                            <p>{{ $usuario->apellidos }}</p>
                        </div>
                        <div class="direccionpedido">
                            <label>@lang('pedido.direccion')</label>
                            <p>{{ $usuario->direccion }}</p>
                        </div>
                        <div class="cp-ciudad">
                            <label>@lang('pedido.cp')</label>
                            <p>{{ $usuario->cp }}</p>
                        </div>
                        <div class="ciudadpedido">
                            <label>@lang('pedido.ciudad')</label>
                            <p>{{ $usuario->ciudad }}</p>
                        </div>

                    </div>

                    <div class="resumen-pedido ">
                        <h2 id="titulo-resumen">{{ strtoupper(__('pedido.tuPedido')) }}</h2>
                        <div id="importe-gastos">
                            <div class="d-flex justify-content-between">
                                <p class="text-secondary mb-0">@lang('carrito.valorT')</p>
                                <p class="text-end mb-2">{{ number_format($total, 2) }} €</p>
                            </div>
                            <div class="d-flex justify-content-between tex">
                                <p class="text-secondary mb-0">@lang('carrito.gastosEnv')</p>
                                <p class="text-end mb-2">{{ number_format($gastosEnvio, 2) }} €</p>
                            </div>
                        </div>
                        <div id="total">
                            <div class="d-flex justify-content-between mt-3 mb-10">
                                <p class="text-secondary mb-0">@lang('carrito.totalPedido')</p>
                                <p class="text-end mb-2">{{ number_format($total + $gastosEnvio, 2) }} €</p>
                            </div>
                        </div>
                        <div class="d-flex justify-center mb-10">
                            <x-makinon-primary-button class="paso--clickeable"
                                style="width:60%">@lang('pedido.cont')</x-makinon-primary-button>
                        </div>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="contenedor-forma-pago">
                    <h2>{{ strtoupper(__('pedido.formaPago')) }}</h2>
                    <div class="selector-forma-pago">
                        <div class="contenedor-tarjeta">
                            <div class="d-flex flex-row align-items-center">
                                <x-makinon-radio-button id="elegida-tarjeta" name="forma-pago"
                                    value="tarjeta"></x-makinon-radio-button>
                                <label class="mb-0 ml-5">@lang('pedido.tarjetaCredito')</label>
                            </div>
                            <div class="tarjeta">
                                <p>@lang('pedido.seleccTarjeta')</p>
                                <div class="d-flex align-items-end ">
                                    <x-makinon-primary-button class="paso--clickeable"
                                        style="margin-left:0;">@lang('pedido.cont')</x-makinon-primary-button>
                                </div>
                            </div>
                        </div>

                        <div class="contenedor-paypal">
                            <div class="d-flex flex-row align-items-center">
                                <x-makinon-radio-button id="elegido-paypal" name="forma-pago"
                                    value="paypal"></x-makinon-radio-button>
                                <label class="mb-0 ml-5">@lang('pedido.paypal')</label>
                            </div>
                            <div class="paypal">
                                <p>@lang('pedido.seleccPaypal')
                                </p>
                                <div class="d-flex align-items-end ">
                                    <x-makinon-primary-button class="paso--clickeable"
                                        style="margin-left:0;">@lang('pedido.cont')</x-makinon-primary-button>
                                </div>
                            </div>
                        </div>


                        <div class="contenedor-transferencia">
                            <div class="d-flex flex-row align-items-center">
                                <x-makinon-radio-button id="elegida-transferencia" name="forma-pago"
                                    value="transferencia"></x-makinon-radio-button>
                                <label class="mb-0 ml-5">@lang('pedido.transfBanc')</label>
                            </div>
                            <div class="transferencia">
                                <p>@lang('pedido.seleccTransf')
                                </p>
                                <div class="d-flex align-items-end ">
                                    <x-makinon-primary-button class="paso--clickeable"
                                        style="margin-left:0;">@lang('pedido.cont')</x-makinon-primary-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="contenedor-confirmar-pedido">
                    <h2>{{ strtoupper(__('pedido.compruebaPedido')) }}</h2>
                    <div class="resumen-final">

                        <div class="metodo-pago">
                            <h3>{{ strtoupper(__('pedido.formaPago')) }}</h3>

                            <div class="paypal-elegido">
                                <div style="display:flex; flex-direction:row; align-items:center">
                                    <p>@lang('pedido.msjSeleccPaypal')</p>
                                    <img src="{{ asset('images/paypal.png') }}" alt="Paypal"
                                        style="width: 90px; height: 60px; margin-left:1em; margin-bottom:1rem" />
                                </div>
                            </div>

                            <div class="transferencia-elegido">
                                <div style="display:flex; flex-direction:row; align-items:center">
                                    <p>@lang('pedido.msjSeleccTransf')</p>
                                    <img src="{{ asset('images/banco.png') }}" alt="Banco"
                                        style="width: 40px; height: 40px; margin-left:1em; margin-bottom:1rem" />
                                </div>
                            </div>

                            <div class="tarjeta-elegido">
                                <div style="display:flex; flex-direction:row; align-items:center">
                                    <p>@lang('pedido.msjSeleccTarjeta')</p>
                                    <img src="{{ asset('images/visa.png') }}" alt="Visa"
                                        style="width: 50px; height: 50px; margin-left:1em; margin-bottom:1rem" />
                                    <img src="{{ asset('images/mastercard.png') }}" alt="Mastercard"
                                        style="width: 50px; height: 50px; margin-left:1em; margin-bottom:1rem" />
                                    <img src="{{ asset('images/american-express.png') }}" alt="American Express"
                                        style="width: 50px; height: 50px; margin-left:1em; margin-bottom:1rem" />
                                </div>

                                <div class="contenedor-tarjeta-input">
                                    <div>
                                        <x-input-label for="numero-tarjeta">@lang('pedido.numTarjeta')</x-input-label>
                                        <x-text-input type="text" id="numero_tarjeta" name="numero_tarjeta"
                                            placeholder="0000 0000 0000 0000" />
                                    </div>

                                    <div>
                                        <x-input-label for="fecha-vencimiento">@lang('pedido.fechaCad')</x-input-label>
                                        <x-text-input type="text" id="fecha_vencimiento" name="fecha_vencimiento"
                                            placeholder="MM/AA" />
                                    </div>
                                    <div>
                                        <x-input-label for="cvv">CVV</x-input-label>
                                        <x-text-input type="text" id="cvv" name="cvv" placeholder="000" />
                                    </div>
                                    <div>
                                        <x-input-label for="nombre-titular">@lang('pedido.nombreTitular')</x-input-label>
                                        <x-text-input type="text" id="nombre_titular" name="nombre_titular"
                                            placeholder="Nombre del titular" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="direccion-entrega">
                            <h3>{{ strtoupper(__('pedido.direccEnv')) }}</h3>
                            <div class="ml-5">
                                <p><span class="material-symbols-outlined">
                                        account_circle
                                    </span> {{ $usuario->nombre }} {{ $usuario->apellidos }}</p>
                                <p><span class="material-symbols-outlined">
                                        home_pin
                                    </span> {{ $usuario->direccion }}</p>
                                <p><span class="material-symbols-outlined">
                                        location_city
                                    </span> {{ $usuario->cp }}, {{ $usuario->ciudad }}</p>
                                <p><span class="material-symbols-outlined">
                                        alternate_email
                                    </span> {{ $usuario->email }}</p>
                                <p><span class="material-symbols-outlined">
                                        call
                                    </span> {{ $usuario->telefono }}</p>
                            </div>
                        </div>

                        <div class="resumen-cesta">
                            <h3>{{ strtoupper(__('pedido.resumenCesta')) }}</h3>
                            @foreach ($carrito as $item)
                                <div id="lineas-productos-pedido">
                                    <div class="d-flex flex-col">
                                        <p class="mb-2">{{ $item['marca'] }} {{ $item['nombre'] }}
                                        <p class="mb-2">
                                            @if ($item['talla'] != '' && $item['talla'] != 'Sin talla')
                                            @lang('pedido.talla'): {{ $item['talla'] }}
                                            @endif
                                        </p>
                                        <p>
                                            @if (isset($item['color']) && $item['color'] != '' && $item['color'] != 'Sin color')
                                            @lang('pedido.color'): {{ $item['color'] }}
                                            @endif
                                        </p>

                                        </p>
                                    </div>
                                    <p>@lang('carrito.cantidad'): {{ $item['cantidad'] }}</p>
                                    <p>@lang('carrito.precioUD'): {{ $item['precio'] }} €</p>
                                    <p>@lang('carrito.precioTotal'): {{ $item['cantidad'] * $item['precio'] }} €</p>

                                    <form method="POST" action="{{ route('eliminarDelCarrito') }}">
                                        @csrf
                                        @method('DELETE')
                                        @if (isset($item['id_producto']))
                                            <input type="hidden" name="id_producto" value="{{ $item['id_producto'] }}">
                                        @endif
                                    </form>
                                </div>
                            @endforeach
                        </div>


                        <div class="resumen-pago">
                            <div id="importe-gastos">
                                <h3>{{ strtoupper(__('pedido.resumenImporte')) }}</h3>
                                <div class="d-flex justify-content-between ml-5">
                                    <p class="text-secondary mb-0">@lang('carrito.valorT')</p>
                                    <p class="text-end mb-2">{{ number_format($total, 2) }} €</p>
                                </div>
                                <div class="d-flex justify-content-between ml-5">
                                    <p class="text-secondary mb-0">@lang('carrito.gastosEnv')</p>
                                    <p class="text-end mb-2">{{ number_format($gastosEnvio, 2) }} €</p>
                                </div>
                            </div>

                            <div id="total">
                                <div class="d-flex justify-content-between mt-3 mb-10 ml-5">
                                    <p class="text-secondary mb-0">@lang('carrito.totalPedido')</p>
                                    <p class="text-end mb-2">{{ number_format($total + $gastosEnvio, 2) }} €</p>
                                </div>
                            </div>

                            <div class="form-check">
                                <x-makinon-checkbox id="aceptarCondiciones" name="aceptarCondiciones"
                                    class="form-check-input"></x-makinon-checkbox>
                                <label class="form-check-label" for="aceptarCondiciones">
                                    @lang('pedido.terminosCondiciones')
                                </label>
                            </div>

                            <x-makinon-primary-button id="realizarPedido" type="submit" style="width:50%">@lang('pedido.realizarPedido')</x-makinon-primary-button>

                        </div>
                        {{-- <div class="addComentario">
                            <label for="comentario">Añadir comentario</label>
                            <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
                        </div> --}}
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Función que nos permite el desplazamiento entre los diferentes pasos de la compra
        document.querySelectorAll('.paso--clickeable').forEach(function(paso, index) {
            paso.addEventListener('click', function() {
                var contenedorSlide = document.querySelector('.contenedor-slide');
                if (index === 0) {
                    contenedorSlide.style.transform = 'translateX(' + (-33.33) + '%)';
                    document.querySelector('.paso-clickeable-pago').style.backgroundColor =
                        'rgb(211,211,211)';
                } else {
                    contenedorSlide.style.transform = 'translateX(' + (-66.66) + '%)';
                    document.querySelector('.paso-clickeable-confirm').style.backgroundColor =
                        'rgb(211,211,211)';
                }
            });
        });

        // Función que nos cambia el color de los pasos de la compra
        document.querySelectorAll('.paso-clickeable-datos').forEach(function(paso, index) {
            paso.addEventListener('click', function() {
                var contenedorSlide = document.querySelector('.contenedor-slide');
                contenedorSlide.style.transform = 'translateX(' + 0 + '%)';
                document.querySelector('.paso-clickeable-pago').style.backgroundColor = 'white';
                document.querySelector('.paso-clickeable-confirm').style.backgroundColor = 'white';
            });
        });

        // Función que nos cambia el color de los pasos de la compra
        document.querySelectorAll('.paso-clickeable-pago').forEach(function(paso, index) {
            paso.addEventListener('click', function() {
                var contenedorSlide = document.querySelector('.contenedor-slide');
                contenedorSlide.style.transform = 'translateX(' + (-33.33) + '%)';
                document.querySelector('.paso-clickeable-pago').style.backgroundColor = 'rgb(211,211,211)';
                document.querySelector('.paso-clickeable-confirm').style.backgroundColor = 'white';
            });
        });

        // Funcón que nos muestra el método de pago en el resumen de la compra según se haya elegido anteriormente
        document.querySelectorAll('input[name="forma-pago"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                document.querySelector('.tarjeta').style.display = this.value === 'tarjeta' ?
                    'flex' : 'none';
                document.querySelector('.transferencia').style.display = this.value ===
                    'transferencia' ? 'flex' : 'none';
                document.querySelector('.paypal').style.display = this.value === 'paypal' ?
                    'flex' : 'none';
                document.querySelector('.paypal-elegido').style.display = this.value === 'paypal' ?
                    'block' : 'none';
                document.querySelector('.transferencia-elegido').style.display = this.value ===
                    'transferencia' ?
                    'block' : 'none';
                document.querySelector('.tarjeta-elegido').style.display = this.value === 'tarjeta' ?
                    'block' : 'none';
            });
        });

        // Funciónes que nos permiten validar los campos de la tarjeta de crédito
        document.getElementById('numero_tarjeta').addEventListener('input', function(e) {
            var input = e.target;
            var value = input.value.replace(/\s/g, '');

            if (value.length !== 16 || isNaN(value)) {
                input.style.borderColor = 'rgb(255, 0, 0)';
                input.style.backgroundColor = 'rgba(255, 0, 0, 0.1)';
            } else {
                input.style.borderColor = 'green';
                input.style.backgroundColor = '';
            }
        });

        document.getElementById('fecha_vencimiento').addEventListener('input', function(e) {
            var input = e.target;
            var value = input.value;

            if ((value.length !== 5 || !/^\d{2}\/\d{2}$/.test(value))) {
                input.style.borderColor = 'red';
            } else {
                var fechaActual = new Date();
                var mesActual = fechaActual.getMonth() + 1;
                var añoActual = fechaActual.getFullYear().toString().substr(-2);

                var [mes, año] = value.split('/');

                if (año < añoActual || (año == añoActual && mes < mesActual)) {
                    input.style.borderColor = 'rgb(255, 0, 0)';
                    input.style.backgroundColor = 'rgba(255, 0, 0, 0.1)';
                } else {
                    input.style.borderColor = 'green';
                    input.style.backgroundColor = '';
                }
            }
        });

        // Funciones con las que cambiamos el color de los campos de la tarjeta de crédito si no se cumplen las condiciones
        document.getElementById('nombre_titular').addEventListener('input', function(e) {
            var input = e.target;
            var value = input.value;

            if (value.length < 5) {
                input.style.borderColor = 'rgb(255, 0, 0)';
                input.style.backgroundColor = 'rgba(255, 0, 0, 0.1)';
            } else {
                input.style.borderColor = 'green';
                input.style.backgroundColor = '';
            }
        });

        document.getElementById('cvv').addEventListener('input', function(e) {
            var input = e.target;
            var value = input.value;
            if (value.length !== 3 || isNaN(value)) {
                input.style.borderColor = 'rgb(255, 0, 0)';
                input.style.backgroundColor = 'rgba(255, 0, 0, 0.1)';
            } else {
                input.style.borderColor = 'green';
                input.style.backgroundColor = '';
            }
        });

        // Eliminamos en esta vista la posibilidad de usar el tabulador para navegar entre los elementos, asi obligamos a que no se salte ningún campo el usuario
        window.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                e.preventDefault();
            }
        });

        // Obligamos a que el usuario acepte las condiciones de compra para poder realizar el pedido, bloqueando hasta ese momento el boton de compra
        document.addEventListener('DOMContentLoaded', function() {
            var checkbox = document.getElementById('aceptarCondiciones');
            var boton = document.getElementById('realizarPedido');

            // Deshabilitamos el botón y cambiamos su color a gris por defecto
            boton.disabled = true;
            boton.classList.add('button-disabled');

            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    console.log("Checkbox marcado");
                    boton.disabled = false;
                    boton.classList.remove('button-disabled');
                } else {
                    boton.disabled = true;
                    boton.classList.add('button-disabled');
                }
            });
        });
    </script>
@endsection
