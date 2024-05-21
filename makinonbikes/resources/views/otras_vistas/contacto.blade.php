@extends('layouts.app')

@section('main')
    <div class="row w-4/5">
        <div class="card-header text-center">
            <h2 class="mb-3">Contacto</h2>
        </div>

        <div class="contenedor-contacto">
            <div class="contacto-info">
                <h2 class="mt-0">Información de contacto</h2>
                <p>Si tienes alguna duda o pregunta, no dudes en ponerte en contacto con nosotros. Estaremos encantados de
                    ayudarte.</p>
                <p>Si lo prefieres, puedes visitarnos en nuestra tienda física en la siguiente dirección:</p>
                <div class="ml-4">
                    <p>Calle La Boheme, 8</p>
                    <p>29006 Málaga</p>
                    <p>Teléfono: 952 33 95 58</p>
                    <p>Horario de 10:00 a 14:00 y de 17:00 a 20:00h de lunes a viernes, sábados de 10:00 a 14:00</p>
                </div>

            </div>


            <div class="formulario-contacto">
                @if (session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                @endif
                <form action="{{ route('contacto') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <x-input-label for="nomre">Nombre</x-input-label>
                        <x-text-input type="text" name="nombre" id="nombre" class="form-control" required></x-text-input>
                    </div>
                    <div class="form-group">
                        <x-input-label for="email">Email</x-input-label>
                        <x-text-input type="email" name="email" id="email" class="form-control" required></x-text-input>
                    </div>
                    <div class="form-group">
                        <x-input-label for="telefono">Si lo deseas déjanos tu teléfono</x-input-label>
                        <x-text-input type="text" name="telefono" id="telefono" class="form-control"></x-text-input>
                    </div>
                    <div class="form-group mb-4">
                        <x-input-label for="mensaje">Mensaje</x-input-label>
                        <x-textarea-input type="text" name="mensaje" id="mensaje" class="form-control" required></x-textarea-input>
                    </div>
                    <x-makinon-primary-button type="submit">Enviar</x-makinon-primary-button>
                </form>
            </div>
        </div>
    </div>
@endsection
