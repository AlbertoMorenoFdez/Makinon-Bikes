@extends('layouts.app')

@section('main')
    {{-- Muestra para el administrador la ficha completa del usuario seleccionado --}}

    <div class="card w-50">
        <div class="card-header">
            <h2>@lang('makinon.fichaUsu')</h2>
        </div>
        
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
            <p><strong>Apellidos:</strong> {{ $usuario->apellidos }}</p>
            <p><strong>Email:</strong> {{ $usuario->email }}</p>
            <p><strong>NIF:</strong> {{ $usuario->nif }}</p>
            <p><strong>Teléfono:</strong> {{ $usuario->telefono }}</p>
            <p><strong>Dirección:</strong> {{ $usuario->direccion }}</p>
            <p><strong>Código postal:</strong> {{ $usuario->cp }}</p>
            <p><strong>Ciudad:</strong> {{ $usuario->ciudad }}</p>
            <p><strong>Fecha de alta:</strong> {{ $usuario->created_at }}</p>
        </div>

        <div class="card-footer perfilbotones d-flex justify-center">
            <x-makinon-primary-link-button href="{{ route('modificarUsuarioAdmin', $usuario->id_usuario) }}"
                style="margin-right: 10px">@lang('makinon.modifUsu')</x-makinon-primary-link-button>

            <form method="POST" action="{{ route('eliminarUsuario', $usuario->id_usuario) }}">
                @csrf
                @method('DELETE')
                <x-makinon-primary-button type="submit"
                    style="margin-right: 10px">@lang('makinon.elimUsu')</x-makinon-primary-button>
            </form>
            <x-makinon-primary-link-button
                href="{{ route('listadoUsuarios') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
        </div>
    </div>
@endsection
