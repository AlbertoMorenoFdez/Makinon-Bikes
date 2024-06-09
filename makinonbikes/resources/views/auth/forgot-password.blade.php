@extends('layouts.app')

@section('main')
    <div class="portadaLogin">
        <div class="contenedorImagenLogin">
            <img src="{{asset('images/ktm_portada.jpg')}}" alt="KTM">
        </div>

        <div class="contenedorlogin">
            <div class="contenedorizquierda">
                <img src="./images/bicilogin.jpg" alt="login">
            </div>
            <div class="contenedorderecha">
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-makinon-primary-button type="submit">
                            {{ __('Email Password Reset Link') }}
                        </x-makinon-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
