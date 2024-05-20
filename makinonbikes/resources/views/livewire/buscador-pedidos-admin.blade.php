<div class="col-md-14">
    <div class="mt-4">
        <div class="d-flex align-items-center gap-3">
<label for="busqueda" class="sr-only">@lang('makinon.buscarPed')</label>
            <input type="text" class="rounded h-10 " wire:model='search' placeholder="@lang('makinon.buscarPed')"
                name="busqueda"></input>
            <x-makinon-secondary-button wire:click="buscar">@lang('makinon.buscar')</x-makinon-secondary-button>
            <x-makinon-secondary-button wire:click="limpiar">@lang('makinon.mostrar')</x-makinon-secondary-button>

        </div>
    </div>

    <div class="mt-4">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Número de pedido</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Importe</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Comentario</th>
                        <th scope="col" style="text-align:center">Detalle</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id_pedido }}</td>
                            <td>{{ $pedido->fecha }}</td>
                            <td>{{ $pedido->usuario ? $pedido->usuario->nombre . ' ' . $pedido->usuario->apellidos : 'Usuario no encontrado' }}
                            </td>
                            <td>{{ $pedido->total }} €</td>
                            <td>
                                <form action="{{ route('modificarEstadoPedido', $pedido->id_pedido) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="estado" onchange="this.form.submit()"
                                        style="height: 35px; margin-bottom:0px">
                                        <option style="color:black;" value="finalizado"
                                            {{ $pedido->estado == 'finalizado' ? 'selected' : '' }}>
                                            Finalizado</option>
                                        <option style="color:green;" value="enviado"
                                            {{ $pedido->estado == 'enviado' ? 'selected' : '' }}>Enviado
                                        </option>
                                        <option style="color:orange;" value="pendiente"
                                            {{ $pedido->estado == 'pendiente' ? 'selected' : '' }}>
                                            Pendiente</option>
                                        <option style="color:red;" value="cancelado"
                                            {{ $pedido->estado == 'cancelado' ? 'selected' : '' }}>
                                            Cancelado</option>
                                    </select>
                                </form>
                            </td>

                            <td>
                                @if ($pedido->comentario)
                                    {{ $pedido->comentario }}
                                @endif
                            </td>
                            <td style="text-align:center">
                                <a href="{{ route('pedido-detalle', $pedido->id_pedido) }}" aria-label="Detalle del pedido"><i
                                        class="fa-regular fa-file"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $pedidos->links() }}
    </div>
    <div class="d-flex justify-content-center mt-5">
        <x-makinon-primary-link-button
            href="{{ route('usuario.panelAdmin') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
    </div>
</div>
