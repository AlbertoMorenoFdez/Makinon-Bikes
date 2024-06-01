@extends('layouts.app')

@section('main')
    <!-- Muestra la vista del formulario para modificar un usuario junto con sus datos -->
    <div class="d-flex flex-column">
        <h2>Modificar perfil del usuario</h2>

        <form method="POST" action="{{ route('usuario.modificarUsuario') }}">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <div class="mt-4">
                        <label for="nombre" class="form-label">@lang('makinon.nombre')</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $usuario->nombre }}">
                        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="apellidos" class="form-label">@lang('makinon.apellidos')</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos"
                            value="{{ $usuario->apellidos }}">
                        <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $usuario->email }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="nif" class="form-label">@lang('makinon.nif')</label>
                        <input type="text" class="form-control" id="nif" name="nif"
                            value="{{ $usuario->nif }}">
                        <x-input-error :messages="$errors->get('nif')" class="mt-2" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mt-4">
                        <label for="telefono" class="form-label">@lang('makinon.telefono')</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"
                            value="{{ $usuario->telefono }}">
                        <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="direccion" class="form-label">@lang('makinon.direccion')</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"
                            value="{{ $usuario->direccion }}">
                        <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="cp" class="form-label">@lang('makinon.cp')</label>
                        <input type="text" class="form-control" id="cp" name="cp"
                            value="{{ $usuario->cp }}">
                        <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <label for="ciudad" class="form-label">@lang('makinon.ciudad')</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad"
                            value="{{ $usuario->ciudad }}">
                        <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="d-flex justify-content-center mt-5 gap-10">
                    <x-makinon-primary-button type="submit"
                        style="margin-right:10px">@lang('makinon.guardar')</x-makinon-primary-button>
                    <x-makinon-primary-link-button
                        href="{{ route('usuario.perfil') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
                </div>
            </div>
        </form>
    </div>

@endsection
