@extends('layouts.app')

@section('main')
    <div class="portadaLogin">
        <div class="contenedorImagenLogin">
            <img src="{{asset('./images/ktm_portada.jpg')}}" alt="KTM">
        </div>

        <div class="contenedorlogin">
            <div class="contenedorizquierda">
                <img src="./images/bicilogin.jpg" alt="login">
            </div>

            <div class="contenedorderecha">
                {{-- {% if error %}
				<div class="alert alert-danger" style="color:red">{{ error }}</div>
			{% endif %} --}}
                <!-- Session Status -->
                <x-auth-session-status class="mb-0" :status="session('status')" />
                <h2>@lang('makinon.bienvenido')</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Recuerdame -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Seguir conectado') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Recordar contraseña') }}
                            </a>
                        @endif

                        <x-makinon-primary-button type="submit" style="margin-left: 10px">
                            {{ __('Log in') }}
                        </x-makinon-primary-button>
                    </div>

                </form>
                <div class="d-flex flex-row justify-items-center registro">
                    <p class="mb-0 mr-2">¿No tienes cuenta?</p>
                    <a href="{{ route('register') }}" style="text-decoration: none; color: black; ">@lang('makinon.registrate').</a>
                </div>

            </div>

        </div>
    </div>
@endsection
