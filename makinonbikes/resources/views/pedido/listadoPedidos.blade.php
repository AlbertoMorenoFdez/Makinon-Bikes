@extends('layouts.app')

@section('main')
    <div class="row w-4/5">
        <div class="card-header text-center">
            <h1>Listado de Pedidos</h1>
        </div>
        <!-- Utilizamos un componente Livewire -->
        <div>
            @livewire('buscador-pedidos-admin')
        </div>
    @endsection
