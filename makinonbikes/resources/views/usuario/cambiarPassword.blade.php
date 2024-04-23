@extends('layouts.app')

@section('main')

    <div class="card w-1/3">
        <div class="card-header">
            <h2>@lang('makinon.cambioContra')</h2>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <form method="POST" action="{{ route('cambiarPassword') }}">
            @csrf
            <div class="card-body">
                <div class="mt-4">
                    <label for="current_password">@lang('makinon.contraAct')</label>
                    <input type="password" class="form-control" id="current_password" name="current_password" required>
                </div>

                <div class="mt-4">
                    <label for="new_password">@lang('makinon.nuevaContra')</label>
                    <input type="password" class="form-control" id="new_password" name="new_password" required>
                    <x-input-error :messages="$errors->get('new_password')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <label for="new_password_confirmation">@lang('makinon.repiteContra')</label>
                    <input type="password" class="form-control" id="new_password_confirmation"
                        name="new_password_confirmation" required>
                        <x-input-error :messages="$errors->get('new_password_confirmation')" class="mt-2" />
                </div>
            </div>
            <div class="card-footer d-flex justify-content-center">
                <x-makinon-primary-button type="submit">@lang('makinon.cambioContra')</x-makinon-primary-button>
                <x-makinon-primary-link-button href="{{ route('usuario.perfil') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
                
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

        </form>
    </div>



@endsection
