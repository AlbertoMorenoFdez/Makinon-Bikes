@extends('layouts.app')

@section('main')
    <div class="compra">

        <div class="progreso-compra">
            <button class="paso--clickeable">
                <div class="paso_texto">
                    <span>Mis Datos</span>
                </div>
            </button>
            <button class="paso--clickeable">
                <div class="paso_texto">
                    <span>Forma de Pago</span>
                </div>
            </button>
            <button class="paso--clickeable">
                <div class="paso_texto">
                    <span>Confirmar Datos</span>
                </div>
            </button>
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
                    <div class="d-flex justify-center">
                        <x-makinon-primary-button class="paso--clickeable"
                            style="width:60%">Continuar</x-makinon-primary-button>
                    </div>

                    {{-- <div class="botones-pago">
                    <x-makinon-primary-link-button href="{{ url()->previous() }}" style="width:60%">Seguir
                        comprando</x-makinon-primary-link-button>
                    <form action="{{ route('realizar-pedido') }}" method="GET">
                        @csrf
                        <x-makinon-primary-button type="submit" style="width:60%">Realizar Pedido</x-makinon-primary-button>
                    </form>
                    </div> --}}
                </div>
            </div>
            <div class="contenedor-forma-pago">
                <h2>FORMA DE PAGO</h2>
                <div class="selector-forma-pago">

                    <div class="contenedor-tarjeta">
                        <div class="d-flex flex-row align-items-center">
                            <x-makinon-radio-button name="forma-pago" value="tarjeta"></x-makinon-radio-button>
                            <label class="mb-0 ml-5">Tarjeta de crédito</label>
                        </div>

                        <div class="tarjeta">
                            <div class="contenedor-tarjeta-input">
                                <div><label for="numero-tarjeta">Número de tarjeta</label>
                                    <input type="text" id="numero-tarjeta" name="numero-tarjeta"
                                        placeholder="0000 0000 0000 0000">
                                </div>

                                <div><label for="fecha-caducidad">Fecha de caducidad</label>
                                    <input type="text" id="fecha-caducidad" name="fecha-caducidad" placeholder="MM/AA">
                                </div>
                                <div><label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="000">
                                </div>
                                <div><label for="nombre-titular">Nombre del titular</label>
                                    <input type="text" id="nombre-titular" name="nombre-titular"
                                        placeholder="Nombre del titular">
                                </div>
                                <div></div>
                                <div class="d-flex align-items-end ">
                                    <x-makinon-primary-button class="paso--clickeable"
                                        style="width:41%; margin-left:0;">Continuar</x-makinon-primary-button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="contenedor-paypal">
                        <div class="d-flex flex-row align-items-center">
                            <x-makinon-radio-button name="forma-pago" value="paypal"></x-makinon-radio-button>
                            <label class="mb-0 ml-5">Paypal</label>
                        </div>
                        <div class="paypal">
                            <p>Al seleccionar esta opción le redirigiremos a la página de Paypal para que pueda realizar el
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
                            <x-makinon-radio-button name="forma-pago" value="transferencia"></x-makinon-radio-button>
                            <label class="mb-0 ml-5">Transferencia bancaria</label>
                        </div>
                        <div class="transferencia">
                            <p class="mr-5">Al seleccionar esta opción le enviaremos los datos bancarios donde debe
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
                <h2>RESUMEN DEL PEDIDO</h2>
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
                <h2>FORMA DE PAGO</h2>
                <div class="d-flex justify-content-between">
                    <p class="text-secondary mb-0">Tarjeta de crédito</p>
                    <p class="text-end mb-2">**** **** **** 1234</p>
                </div>
                <div>

                </div>
                <div class="form-check">
                    <x-makinon-checkbox id="aceptarCondiciones" name="aceptarCondiciones"
                        class="form-check-input"></x-makinon-checkbox>
                    <label class="form-check-label" for="aceptarCondiciones">
                        He leído y acepto los términos y condiciones de compra.
                    </label>
                </div>
                <div>
                    <x-makinon-primary-button id="realizarPedido" type="submit" style="width:20%">Realizar
                        Pedido</x-makinon-primary-button>
                </div>


            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.paso--clickeable').forEach(function(paso, index) {
            paso.addEventListener('click', function() {
                if (index < 3) {
                    var contenedorSlide = document.querySelector('.contenedor-slide');
                    contenedorSlide.style.transform = 'translateX(' + (-33.33 * index) + '%)';
                } else if (index == 3) {
                    var contenedorSlide = document.querySelector('.contenedor-slide');
                    contenedorSlide.style.transform = 'translateX(' + (-33.33) + '%)';
                } else {
                    var contenedorSlide = document.querySelector('.contenedor-slide');
                    contenedorSlide.style.transform = 'translateX(' + (-66.66) + '%)';
                }

                this.classList.add('visitado');
            });
        });

        document.querySelectorAll('input[name="forma-pago"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                document.querySelector('.tarjeta').style.display = this.value === 'tarjeta' ?
                    'block' : 'none';
                document.querySelector('.transferencia').style.display = this.value ===
                    'transferencia' ? 'flex' : 'none';
                document.querySelector('.paypal').style.display = this.value === 'paypal' ?
                    'flex' : 'none';
            });
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
