@extends('layouts.app')

@section('main')
    <div class="row w-4/5 h-full">
        <div class="card-header text-center">
            <h1>@lang('makinon.listaProd')</h1>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <!-- Utilizamos el componente creado en Livewire -->
        <div>
            @livewire('buscador-producto-admin')
        </div>


    </div>
@endsection
