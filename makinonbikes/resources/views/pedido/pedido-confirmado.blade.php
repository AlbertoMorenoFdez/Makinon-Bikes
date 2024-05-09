@extends('layouts.app')

@section('main')

<div class="container-pedido-confirmado">
    <div class="container-loop-bike">
        <div id="loop" class="center"></div>
        <div id="bike-wrapper" class="center">
            <div id="bike" class="centerBike"></div>
        </div>
    </div>
    <div class="container-text">
        <h1>PEDIDO CONFIRMADO</h1>
        <p>Gracias por confiar en nosotros. </p>
        <p>Tu pedido ha sido confirmado y en breve recibirás un correo con los detalles del mismo.</p>
        <p>También puedes consultarlo desde tu área de cliente.</p>
        <x-makinon-primary-link-button href="{{ route('home') }}" style="width: 70%">Inicio</x-makinon-primary-link-button>
    </div>
</div>

<script>
    window.onload= function(){
        setTimeout(function(){
            document.querySelector('.container-loop-bike').style.display="none";
            document.querySelector('.container-text').style.display="flex";
        }, 6000);
    };
</script>

@endsection