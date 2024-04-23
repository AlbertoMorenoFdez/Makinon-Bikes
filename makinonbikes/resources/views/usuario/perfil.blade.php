@extends('layouts.app')

@section('main')
    {{-- Muestra el perfil del usuario --}}

    <div class="card" style="width:55%">
        <div class="card-header">
            <h2>@lang('makinon.perfilUsu')</h2>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="card-body ">
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
            <x-makinon-primary-link-button href="{{ route('usuario.modificarUsuario') }}">@lang('makinon.modifPerfil')</x-makinon-primary-link-button>
            <form method="POST" action="{{ route('deleteUsuario') }}">
                @csrf
                @method('DELETE')
                <x-makinon-primary-button type="submit">@lang('makinon.elimPerfil')</x-makinon-primary-button>
            </form>
            <x-makinon-primary-link-button href="{{ route('cambiarPassword') }}">@lang('makinon.cambioContra')</x-makinon-primary-link-button>
            <x-makinon-primary-link-button href="{{ route('home') }}">@lang('makinon.salir')</x-makinon-primary-link-button>
        </div>
    </div>
@endsection
