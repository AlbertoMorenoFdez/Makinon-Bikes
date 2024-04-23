@extends('layouts.app')

@section('main')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row md-4">

            <div class="card-header text-center">
                <h2>Registro de usuarios</h2>
            </div>

            <div class="col-md-6">
                <!-- Nombre -->
                <div class="mt-4">
                    <x-input-label for="name" :value="__('makinon.nombre')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Apellidos -->
                <div class="mt-4">
                    <x-input-label for="apellidos" :value="__('makinon.apellidos')" />
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

                <!-- Password Confirmacion-->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>


            <div class="col-md-6">

                <!-- NIF -->
                <div class="mt-4">
                    <x-input-label for="nif" :value="__('makinon.nif')" />
                    <x-text-input id="nif" class="block mt-1 w-full" type="text" name="nif" :value="old('nif')"
                        required autocomplete="nif" />
                    <x-input-error :messages="$errors->get('nif')" class="mt-2" />
                </div>

                <!-- Teléfono -->
                <div class="mt-4">
                    <x-input-label for="telefono" :value="__('makinon.telefono')" />
                    <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')"
                        required autocomplete="telefono" />
                    <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                </div>

                <!-- Dirección -->
                <div class="mt-4">
                    <x-input-label for="direccion" :value="__('makinon.direccion')" />
                    <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                        :value="old('direccion')" required autocomplete="direccion" />
                    <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                </div>

                <!-- Código postal -->
                <div class="mt-4">
                    <x-input-label for="cp" :value="__('makinon.cp')" />
                    <x-text-input id="cp" class="block mt-1 w-full" type="text" name="cp" :value="old('cp')"
                        required autocomplete="cp" />
                    <x-input-error :messages="$errors->get('cp')" class="mt-2" />
                </div>

                <!-- Ciudad -->
                <div class="mt-4">
                    <x-input-label for="ciudad" :value="__('makinon.ciudad')" />
                    <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" :value="old('ciudad')"
                        required autocomplete="ciudad" />
                    <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
                </div>
            </div>

            <div class="flex items-center justify-center mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('login') }}">
                    @lang('makinon.ya registro')
                </a>

                <x-makinon-primary-button class="ms-4" type="submit">
                    @lang('makinon.registrate')
                </x-makinon-primary-button>
            </div>
        </div>
    </form>
@endsection
