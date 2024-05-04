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
                        <div class="d-flex justify-content-between mt-3">
                            <p class="text-secondary mb-0">Total del pedido</p>
                            <p class="text-end mb-2">{{ number_format($total + $gastosEnvio, 2) }} €</p>
                        </div>
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
                <div class="titulo-forma-pago">FORMA DE PAGO</div>
                <div class="contenedor-tarjeta">
                    <div class="tarjeta">
                        <div class="titulo-tarjeta">TARJETA DE CRÉDITO</div>
                        <div class="contenedor-tarjeta-input">
                            <label for="numero-tarjeta">Número de tarjeta</label>
                            <input type="text" id="numero-tarjeta" name="numero-tarjeta"
                                placeholder="0000 0000 0000 0000"> <br>
                            <label for="nombre-titular">Nombre del titular</label>
                            <input type="text" id="nombre-titular" name="nombre-titular"
                                placeholder="Nombre del titular"> <br>
                            <label for="fecha-caducidad">Fecha de caducidad</label>
                            <input type="text" id="fecha-caducidad" name="fecha-caducidad" placeholder="MM/AA"> <br>
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="000"> <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor-confirmar-pedido">

                <x-makinon-primary-button type="submit" style="width:60%">Realizar Pedido</x-makinon-primary-button>

            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.paso--clickeable').forEach(function(paso, index) {
            paso.addEventListener('click', function() {
                var contenedorSlide = document.querySelector('.contenedor-slide');
                contenedorSlide.style.transform = 'translateX(' + (-33.33 * index) + '%)';
                this.classList.add('visitado');
            });
        });
    </script>
@endsection
