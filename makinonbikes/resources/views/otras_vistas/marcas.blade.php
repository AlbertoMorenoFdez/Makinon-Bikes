@extends('layouts.app')

@section('main')
    <div class="row w-4/5 d-flex justify-center">

        <div class="contenedor-info">
            <div class="contacto-info">
                <h2>Nuestras marcas</h2>
                <p>En Makinon trabajamos con las mejores marcas del mercado. A continuación te presentamos algunas de ellas:
                </p>
                <div>
                    @php
                        $currentLetter = '';
                    @endphp

                    @foreach ($marcas as $marca)
                        @php
                            $firstLetter = strtoupper(substr($marca->nombre, 0, 1));
                        @endphp

                        @if ($firstLetter !== $currentLetter)
                            <h2>{{ $firstLetter }}</h2>
                            <hr>
                            @php
                                $currentLetter = $firstLetter;
                            @endphp
                        @endif

                        <p class="fs-5 ml-3"><a href="{{ route('productos.marca', $marca->nombre) }}">{{ $marca->nombre }}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
