<div class="resultadoBuscador">
    <x-text-input type="text" id="buscador" wire:model="search" placeholder="Buscar..." wire:keydown.enter="buscar"></x-text-input>

    @if (!empty($search))
        @if (count($productos) > 0)
            @foreach ($productos as $producto)
                <div>
                    <p style="margin-left: 10px"><a href="{{ route('vistaProducto', $producto->id_producto) }}" style="color:black; text-decoration:none">{{ $producto->nombre }}</a></p>
                </div>
            @endforeach
        @else
            <div>
                <h5>No hay resultados</h5>
            </div>
        @endif
    @endif
</div>
