@extends('layouts.app')

@section('main')
    <div class="contenedor-taller">
        <div id=texto>
            <h1> NUESTRO TALLER </h1>
            <br>
            <p> En nuestro taller de bicicletas, ofrecemos un servicio de reparación y mantenimiento de bicicletas de todo
                tipo.
            </p>
            <br>
            <p> Nuestros mecánicos son profesionales con años de experiencia en el sector. Debidamente formados en las
                últimas
                técnicas de reparación y en las últimas tecnologías que dominan el sector de la bicicleta. </p>
            <p> Contamos además con las mas avanzadas herramientas del mercado para no dejar nada al azar y que tú, como
                cliente, no tengas que preocuparte por nada.</p>
            <br>
            <p> Si tienes cualquier problema con tu bicicleta, no dudes en traerla a nuestro taller. Estaremos encantados de
                ayudarte y de que puedas volver a disfrutar de tu bicicleta como el primer día. </p>
            <p> Además, si lo que necesitas es una puesta a punto, también puedes traer tu bicicleta a nuestro taller. Te
                aseguramos que la dejaremos como nueva. </p>
            <br>
            <p> No lo dudes, si necesitas cualquier cosa relacionada con tu bicicleta, puedes concertar una cita pinchando
                <a href="{{ route('citaTaller') }}">AQUI</a> .
            </p>
        </div>
    </div>
@endsection
