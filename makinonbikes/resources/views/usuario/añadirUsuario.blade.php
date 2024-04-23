@extends('layouts.app')

@section('main')
    <form method="POST" action="{{ route('agregarUsuarioAdmin') }}">
        @csrf
        <div class="row d-flex justify-center">
            <div class="card-header text-center">
                <h1>Registro de usuario por administración</h1>
            </div>

            <div class="col-md-5">
                <!-- Nombre -->
                <div class="mt-4">
                    <x-input-label for="nombre">@lang('makinon.nombre')</x-input-label>
                    <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"
                        required autofocus autocomplete="nombre" />
                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                </div>

                <!-- Apellidos -->
                <div class="mt-4">
                    <x-input-label for="apellidos">@lang('makinon.apellidos')</x-input-label>
                    <x-text-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')"
                        required autocomplete="apellidos" />
                    <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                        required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Rol -->
                <div class="mt-4">
                    <x-input-label for="rol" :value="__('Rol')" />
                    <select class="form-control h-11" id="rol" name="rol" required>
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                    </select>
                    <x-input-error :messages="$errors->get('rol')" class="mt-2" />
                </div>
            </div>


            <div class="col-md-5">

                <!-- NIF -->
                <div class="mt-4">
                    <x-input-label for="nif" :value="__('NIF')" />
                    <x-text-input id="nif" class="block mt-1 w-full" type="text" name="nif" :value="old('nif')"
                        required autocomplete="nif" />
                    <x-input-error :messages="$errors->get('nif')" class="mt-2" />
                </div>

                <!-- Teléfono -->
                <div class="mt-4">
                    <x-input-label for="telefono">@lang('makinon.telefono')</x-input-label>
                    <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')"
                        required autocomplete="telefono" />
                    <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                </div>

                <!-- Dirección -->
                <div class="mt-4">
                    <x-input-label for="direccion">@lang('makinon.direccion')</x-input-label>
                    <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                        :value="old('direccion')" required autocomplete="direccion" />
                    <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                </div>

                <!-- Código postal -->
                <div class="mt-4">
                    <x-input-label for="cp">@lang('makinon.cp')</x-input-label>
                    <x-text-input id="cp" class="block mt-1 w-full" type="text" name="cp" :value="old('cp')"
                        required autocomplete="cp" />
                    <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                </div>

                <!-- Ciudad -->
                <div class="mt-4">
                    <x-input-label for="ciudad">@lang('makinon.ciudad')</x-input-label>
                    <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" :value="old('ciudad')"
                        required autocomplete="ciudad" />
                    <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <x-makinon-primary-button type="submit">@lang('makinon.añadirUsu')</x-makinon-primary-button>
                <x-makinon-primary-link-button href="{{ route('listadoUsuarios') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
                
            </div>
        </div>
    </form>
@endsection
