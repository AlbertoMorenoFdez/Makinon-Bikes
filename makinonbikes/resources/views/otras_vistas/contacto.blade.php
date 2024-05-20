@extends('layouts.app')

@section('main')
    <div class="row md-4">
        <div class="card-header text-center">
            <h2>Contacto</h2>
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
                        <label for="nomre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Si lo deseas déjanos tu teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
                    </div>
                    <x-makinon-primary-button type="submit">Enviar</x-makinon-primary-button>
                </form>
            </div>

        </div>
    </div>
@endsection
