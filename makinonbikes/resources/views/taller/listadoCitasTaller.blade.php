@extends ('layouts.app')

@section('main')
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Número de cita</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Opción</th>
                        <th scope="col">Comentario del cliente</th>
                        <th scope="col" style="text-align:center">Imagen*</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($citas as $cita)
                        <tr>
                            <td>{{ $cita->id_cita_taller }}</td>
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
                            <td>
                                @if ($cita->imagen)
                                    {{ $cita->imagen }}
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('modificarEstadoCita', $cita->id_cita_taller) }}" method="POST">
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
            {{ $citas->links() }}
        </div>
        <div class="d-flex justify-content-center mt-5">

            <x-makinon-primary-link-button href="{{route('citaTaller')}}" style="margin-right: 10px">Ver en calendario
            </x-makinon-primary-link-button>
            <x-makinon-primary-link-button
                href="{{ route('usuario.panelAdmin') }}">@lang('makinon.volver')</x-makinon-primary-link-button>
        </div>
    </div>
@endsection
