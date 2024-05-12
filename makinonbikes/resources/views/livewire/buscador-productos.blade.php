<div class="resultadoBuscador">
    {{-- <x-text-input type="text" id="buscador" wire:model="search" placeholder="Buscar..." wire:keydown.enter="buscar"></x-text-input> --}}

    <label for="Buscar" class="sr-only"> Search </label>

    <input type="text" id="buscador" placeholder="Buscar..." wire:model="search" 
        class="w-full rounded-md border-orange-500 py-2.5 pe-10 shadow-sm sm:text-sm" />

    <span class="absolute inset-y-0 end-0 grid mt-1 mr-2 w-10 place-content-center" >
        <button type="button" class="text-gray-600 hover:text-gray-700" wire:click="buscar"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </button>
    </span>

    @if (!empty($search))
        @if (count($productos) > 0)
            @foreach ($productos as $producto)
                <div>
                    <p style="margin-left: 10px"><a href="{{ route('vistaProducto', $producto->id_producto) }}"
                            style="color:black; text-decoration:none">{{ $producto->nombre }}</a></p>
                </div>
            @endforeach
        @else
            <div>
                <h5>No hay resultados</h5>
            </div>
        @endif
    @endif
</div>
