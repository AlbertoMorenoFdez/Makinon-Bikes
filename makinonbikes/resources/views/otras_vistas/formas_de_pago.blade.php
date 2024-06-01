@extends('layouts.app')

@section('main')
    <div class="row w-4/5 d-flex justify-center">

        <div class="contenedor-info">
            <div class="contacto-info">
                <h2>Formas de pago</h2>
                <hr class="mb-3">
                <p>En nuestra tienda online puedes pagar de las siguientes formas:</p>

                <div class="mb-2">
                    <li>Tarjeta de crédito o débito</li>
                    <li>PayPal</li>
                    <li>Transferencia bancaria</li>
                </div>

                <p>Si eliges la opción de transferencia bancaria, te enviaremos un correo con los datos necesarios para
                    realizar
                    la transferencia. Una vez recibido el pago, procederemos a enviar tu pedido.</p>
                <p>Si tienes alguna duda sobre las formas de pago, no dudes en ponerte en contacto con nosotros a través de
                    nuestro <a href={{ route('contacto') }} label="contacto"><strong>formulario de contacto</strong></a> o en
                    el teléfono 952 33 95 58.</p>
            </div>
            <div class="imgFormasPago">
                <img src="{{ asset('images/visa.png') }}" alt="visa">
                <img src="{{ asset('images/mastercard.png') }}" alt="mastercard">
                <img src="{{ asset('images/american-express.png') }}" alt="american-express">
                <img src="{{ asset('images/paypal.png') }}" alt="paypal">
                <img src="{{ asset('images/banco.png') }}" alt="banco" style="width:80%;height:80%">
            </div>

        </div>
    @endsection
