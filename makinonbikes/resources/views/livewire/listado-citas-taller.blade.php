<div>
    <div class="row 4/5">
        <div class="card-header text-center">
            <h1>@lang('makinon.listaCitas')</h1>
        </div>
        <div>
            @if (session('success'))
                <div class="alert alert-success" style="width: 20%">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="mt-4">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Fecha
                                <button title="Orden ascendente" wire:click="ordenAscendente('fecha')">
                                    &#9650;
                                </button>
                                <button title="Orden descendente" wire:click="ordenDescendente('fecha')">
                                    &#9660;
                                </button>
                            </th>
                            <th scope="col">Hora</th>
                            <th scope="col"> Cliente </th>
                            <th scope="col">Opción
                                <button title="Orden ascendente" wire:click="ordenAscendente('opcion')">
                                    &#9650;
                                </button>
                                <button title="Orden descente " wire:click="ordenDescendente('opcion')">
                                    &#9660;
                                </button>
                            </th>
                            <th scope="col">Comentario del cliente</th>
                            <th scope="col" style="text-align:center">Imagen*</th>
                            <th scope="col">Estado
                                <button title="Orden ascendente" wire:click="ordenAscendente('estado')">
                                    &#9650;
                                </button>
                                <button title="Orden descendente" wire:click="ordenDescendente('estado')">
                                    &#9660;
                                </button>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($citas as $cita)
                            <tr>
                                <td>{{ $cita->fecha }}</td>
                                <td>{{ $cita->hora }}</td>
                                <td>{{ $cita->usuario ? $cita->usuario->nombre . ' ' . $cita->usuario->apellidos : 'Usuario no encontrado' }}
                                </td>
                                <td>{{ $cita->opcion }}</td>
                                <td>
                                    @if ($cita->comentario)
                                        {{ $cita->comentario }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($cita->imagen)
                                        <a href="#" class="imagen-link" data-bs-toggle="modal"
                                            data-bs-target="#imagenModal" data-imagen="{{ asset($cita->imagen) }}">
                                            {{ $cita->imagen }}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('modificarEstadoCita', $cita->id_cita_taller) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select name="estado" onchange="this.form.submit()"
                                            style="height: 35px; margin-bottom:0px">
                                            <option style="color:black;" value="finalizada"
                                                {{ $cita->estado == 'finalizada' ? 'selected' : '' }}>
                                                Finalizada</option>
                                            <option style="color:green;" value="confirmada"
                                                {{ $cita->estado == 'confirmada' ? 'selected' : '' }}>Confirmada
                                            </option>
                                            <option style="color:orange;" value="pendiente"
                                                {{ $cita->estado == 'pendiente' ? 'selected' : '' }}>
                                                Pendiente</option>
                                            <option style="color:red;" value="cancelada"
                                                {{ $cita->estado == 'cancelada' ? 'selected' : '' }}>
                                                Cancelada</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $citas->links() }}
        </div>

        <div class="d-flex justify-content-center mt-5">
            <x-makinon-primary-link-button href="{{ route('citaTaller') }}" style="margin-right: 10px">Ver en
                calendario
            </x-makinon-primary-link-button>
            <x-makinon-primary-link-button
                href="{{ route('usuario.panelAdmin') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
        </div>
    </div>

    <!-- Modal para mostrar la imagen -->
    <div id="miModalImagen" class="modal">
        <div class="modal-content" style="width:50%">
            <button class="close d-flex justify-end mb-2"><span class="material-symbols-outlined">
                    cancel
                </span></button>
            <img id="imagenCita" src="" alt="Imagen de la cita" style="width: 100%">
        </div>
    </div>

</div>
