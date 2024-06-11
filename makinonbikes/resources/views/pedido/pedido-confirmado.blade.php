@extends('layouts.app')

@section('main')
    <div class="container-pedido-confirmado">
        <div class="container-loop-bike">
            <div id="loop" class="center"></div>
            <div id="bike-wrapper" class="center">
                <div id="bike" class="centerBike"></div>
            </div>
        </div>
        <div class="container-text">
            <h1>{{ strtoupper(__('pedido.pedidoConf')) }}</h1>
            <p>@lang('pedido.graciasPedido')</p>
            <p>@lang('pedido.msjPedido')</p>
            <p>@lang('pedido.msjConsultar')</p>
            <x-makinon-primary-link-button href="{{ route('home') }}"
                style="width: 70%">@lang('pedido.inicioBtn')</x-makinon-primary-link-button>
        </div>
    </div>
@endsection
