@extends('layouts.app')

@section('main')
    <div class="compra">
        <form method="POST" action="{{ route('confirmar-pedido') }}">
            @csrf
            <div class="progreso-compra">
                <div class="paso-clickeable-datos">
                    <span>Mis Datos</span>
                </div>
                <div class="paso-clickeable-pago">
                    <span>Forma de Pago</span>
                </div>
                <div class="paso-clickeable-confirm" disabled>
                    <span>Confirmar Datos</span>
                </div>
            </div>

            <div class="contenedor-slide">
                <div class="contenedor-pedido">
                    <div class="datospersonales">
                        <div class="titulo-datos-personales">DATOS PERSONALES</div>
                        <div class="emailpedido">
                            <label>Email</label>
                            <p>{{ $usuario->email }}</p>
                        </div>
                        <div class="telefonopedido">
                            <label>Teléfono</label>
                            <p>{{ $usuario->telefono }}</p>
                        </div>
                        <div class="direccion-envio">DIRECCION DE ENVIO</div>
                        <div class="nombrepedido">
                            <label>Nombre</label>
                            <p>{{ $usuario->nombre }}</p>
                        </div>
                        <div class="apellidospedido">
                            <label>Apellidos</label>
                            <p>{{ $usuario->apellidos }}</p>
                        </div>
                        <div class="direccionpedido">
                            <label>Dirección</label>
                            <p>{{ $usuario->direccion }}</p>
                        </div>
                        <div class="cp-ciudad">
                            <label>Código Postal</label>
                            <p>{{ $usuario->cp }}</p>
                        </div>
                        <div class="ciudadpedido">
                            <label>Ciudad</label>
                            <p>{{ $usuario->ciudad }}</p>
                        </div>

                    </div>

                    <div class="resumen-pedido ">
                        <h2 id="titulo-resumen">TU PEDIDO</h2>
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
                            <div class="d-flex justify-content-between mt-3 mb-10">
                                <p class="text-secondary mb-0">Total del pedido</p>
                                <p class="text-end mb-2">{{ number_format($total + $gastosEnvio, 2) }} €</p>
                            </div>
                        </div>
                        <div class="d-flex justify-center mb-10">
                            <x-makinon-primary-button class="paso--clickeable"
                                style="width:60%">Continuar</x-makinon-primary-button>
                        </div>
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="contenedor-forma-pago">
                    <h2>FORMA DE PAGO</h2>
                    <div class="selector-forma-pago">
                        <div class="contenedor-tarjeta">
                            <div class="d-flex flex-row align-items-center">
                                <x-makinon-radio-button id="elegida-tarjeta" name="forma-pago"
                                    value="tarjeta"></x-makinon-radio-button>
                                <label class="mb-0 ml-5">Tarjeta de crédito</label>
                            </div>
                            <div class="tarjeta">
                                <p>Si seleccionas esta opción en el siguiente paso te pediremos los datos de tu tarjeta de
                                    crédito, asi que tenlos a mano.
                                </p>
                                <div class="d-flex align-items-end ">
                                    <x-makinon-primary-button class="paso--clickeable"
                                        style="margin-left:0;">Continuar</x-makinon-primary-button>
                                </div>
                            </div>
                        </div>

                        <div class="contenedor-paypal">
                            <div class="d-flex flex-row align-items-center">
                                <x-makinon-radio-button id="elegido-paypal" name="forma-pago"
                                    value="paypal"></x-makinon-radio-button>
                                <label class="mb-0 ml-5">Paypal</label>
                            </div>
                            <div class="paypal">
                                <p>Al seleccionar esta opción le redirigiremos a la página de Paypal para que pueda realizar
                                    el
                                    pago.
                                </p>
                                <div class="d-flex align-items-end ">
                                    <x-makinon-primary-button class="paso--clickeable"
                                        style="margin-left:0;">Continuar</x-makinon-primary-button>
                                </div>
                            </div>
                        </div>


                        <div class="contenedor-transferencia">
                            <div class="d-flex flex-row align-items-center">
                                <x-makinon-radio-button id="elegida-transferencia" name="forma-pago"
                                    value="transferencia"></x-makinon-radio-button>
                                <label class="mb-0 ml-5">Transferencia bancaria</label>
                            </div>
                            <div class="transferencia">
                                <p>Al seleccionar esta opción le enviaremos los datos bancarios donde debe
                                    realizar la
                                    transferencia.
                                </p>
                                <div class="d-flex align-items-end ">
                                    <x-makinon-primary-button class="paso--clickeable"
                                        style="margin-left:0;">Continuar</x-makinon-primary-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="contenedor-confirmar-pedido">
                    <h2>COMPRUEBA TU PEDIDO</h2>
                    <div class="resumen-final">

                        <div class="metodo-pago">
                            <h3>FORMA DE PAGO</h3>

                            <div class="paypal-elegido">
                                <div style="display:flex; flex-direction:row; align-items:center">
                                    <p>Ha elegido pagar mediante Paypal</p>
                                    <img src="{{ asset('images/paypal.png') }}" alt="Paypal"
                                        style="width: 90px; height: 60px; margin-left:1em; margin-bottom:1rem" />
                                </div>
                            </div>

                            <div class="transferencia-elegido">
                                <div style="display:flex; flex-direction:row; align-items:center">
                                    <p>Ha elegido pagar mediante Transferencia bancaria</p>
                                    <img src="{{ asset('images/banco.png') }}" alt="Banco"
                                        style="width: 40px; height: 40px; margin-left:1em; margin-bottom:1rem" />
                                </div>
                            </div>

                            <div class="tarjeta-elegido">
                                <div style="display:flex; flex-direction:row; align-items:center">
                                    <p>Ha elegido pagar mediante Tarjeta de crédito</p>
                                    <img src="{{ asset('images/visa.png') }}" alt="Visa"
                                        style="width: 50px; height: 50px; margin-left:1em; margin-bottom:1rem" />
                                    <img src="{{ asset('images/mastercard.png') }}" alt="Mastercard"
                                        style="width: 50px; height: 50px; margin-left:1em; margin-bottom:1rem" />
                                    <img src="{{ asset('images/american-express.png') }}" alt="American Express"
                                        style="width: 50px; height: 50px; margin-left:1em; margin-bottom:1rem" />
                                </div>

                                <div class="contenedor-tarjeta-input">
                                    <div>
                                        <x-input-label for="numero-tarjeta">Número de tarjeta</x-input-label>
                                        <x-text-input type="text" id="numero_tarjeta" name="numero_tarjeta"
                                            placeholder="0000 0000 0000 0000" required />
                                        {{-- <x-input-error :messages="$errors->get('numero_tarjeta')" class="mt-2" /> --}}
                                    </div>

                                    <div>
                                        <x-input-label for="fecha-vencimiento">Fecha de caducidad</x-input-label>
                                        <x-text-input type="text" id="fecha_vencimiento" name="fecha_vencimiento"
                                            placeholder="MM/AA" required />
                                        {{-- <x-input-error :messages="$errors->get('fecha_vencimiento')" class="mt-2" /> --}}
                                    </div>
                                    <div>
                                        <x-input-label for="cvv">CVV</x-input-label>
                                        <x-text-input type="text" id="cvv" name="cvv" placeholder="000"
                                            required />
                                        {{-- <x-input-error :messages="$errors->get('cvv')" class="mt-2" /> --}}
                                    </div>
                                    <div>
                                        <x-input-label for="nombre-titular">Nombre del titular</x-input-label>
                                        <x-text-input type="text" id="nombre_titular" name="nombre_titular"
                                            placeholder="Nombre del titular" required />
                                        {{-- <x-input-error :messages="$errors->get('nombre_titular')" class="mt-2" /> --}}
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="direccion-entrega">
                            <h3>DIRECCIÓN DE ENTREGA</h3>
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
                            <h3>RESUMEN DE LA CESTA</h3>
                            @foreach ($carrito as $item)
                                <div id="lineas-productos-pedido">
                                    <div class="d-flex flex-col">
                                        <p class="mb-2">{{ $item['marca'] }} {{ $item['nombre'] }}
                                        <p class="mb-2">
                                            @if ($item['talla'] != '' && $item['talla'] != 'Sin talla')
                                                Talla: {{ $item['talla'] }}
                                            @endif
                                        </p>
                                        <p>
                                            @if (isset($item['color']) && $item['color'] != '' && $item['color'] != 'Sin color')
                                                Color: {{ $item['color'] }}
                                            @endif
                                        </p>

                                        </p>
                                    </div>
                                    <p>Cantidad {{ $item['cantidad'] }}</p>
                                    <p>Precio unitario: {{ $item['precio'] }} €</p>
                                    <p>Precio total: {{ $item['cantidad'] * $item['precio'] }} €</p>

                                    <form method="POST" action="{{ route('eliminarDelCarrito') }}">
                                        @csrf
                                        @method('DELETE')
                                        @if (isset($item['id_producto']))
                                            <input type="hidden" name="id_producto" value="{{ $item['id_producto'] }}">
                                        @endif
                                        {{-- <button type="submit"><span class="material-symbols-outlined">
                                            delete
                                        </span></button> --}}
                                    </form>
                                </div>
                            @endforeach
                        </div>

                        <div class="resumen-pago">
                            <div id="importe-gastos">
                                <h3>RESUMEN DEL IMPORTE DEL PEDIDO</h3>
                                <div class="d-flex justify-content-between ml-5">
                                    <p class="text-secondary mb-0">Valor total de los productos IVA incluido</p>
                                    <p class="text-end mb-2">{{ number_format($total, 2) }} €</p>
                                </div>
                                <div class="d-flex justify-content-between ml-5">
                                    <p class="text-secondary mb-0">Gastos de envío</p>
                                    <p class="text-end mb-2">{{ number_format($gastosEnvio, 2) }} €</p>
                                </div>
                            </div>

                            <div id="total">
                                <div class="d-flex justify-content-between mt-3 mb-10 ml-5">
                                    <p class="text-secondary mb-0">Total del pedido</p>
                                    <p class="text-end mb-2">{{ number_format($total + $gastosEnvio, 2) }} €</p>
                                </div>
                            </div>

                            <div class="form-check">
                                <x-makinon-checkbox id="aceptarCondiciones" name="aceptarCondiciones"
                                    class="form-check-input"></x-makinon-checkbox>
                                <label class="form-check-label" for="aceptarCondiciones">
                                    He leído y acepto los términos y condiciones de compra.
                                </label>
                            </div>

                            <x-makinon-primary-button id="realizarPedido" type="submit" style="width:50%">Realizar
                                Pedido</x-makinon-primary-button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
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

        document.querySelectorAll('.paso-clickeable-datos').forEach(function(paso, index) {
            paso.addEventListener('click', function() {
                var contenedorSlide = document.querySelector('.contenedor-slide');
                contenedorSlide.style.transform = 'translateX(' + 0 + '%)';
                document.querySelector('.paso-clickeable-pago').style.backgroundColor = 'white';
                document.querySelector('.paso-clickeable-confirm').style.backgroundColor = 'white';
            });
        });

        document.querySelectorAll('.paso-clickeable-pago').forEach(function(paso, index) {
            paso.addEventListener('click', function() {
                var contenedorSlide = document.querySelector('.contenedor-slide');
                contenedorSlide.style.transform = 'translateX(' + (-33.33) + '%)';
                document.querySelector('.paso-clickeable-pago').style.backgroundColor = 'rgb(211,211,211)';
                document.querySelector('.paso-clickeable-confirm').style.backgroundColor = 'white';
            });
        });

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


        window.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                e.preventDefault();
            }
        });

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
