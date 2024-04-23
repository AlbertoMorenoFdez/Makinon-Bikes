@extends ('layouts.app')

@section('main')
    <div class="card contenedorAdministracion">
        <div class="card-header">
            <h2>@lang('makinon.panelAdmin')</h2>
        </div>
        <div class="card-body">

        </div>
        <div class="columns-2 gap-8 he">
            <div class="card">
                <div class="card-header">
                    <h3>@lang('makinon.proveedores')</h3>
                </div>
                <div class="card-body">
                    <p>Desde aquí podrás gestionar los proveedores de la tienda.</p>
                    <x-makinon-primary-link-button href="{{ route('listadoProveedores') }}">@lang('makinon.gestPro')
                    </x-makinon-primary-link-button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>@lang('makinon.productos')</h3>
                </div>
                <div class="card-body">
                    <p>Desde aquí podrás gestionar los productos de la tienda.</p>
                    <x-makinon-primary-link-button href="{{ route('listadoProductos') }}">@lang('makinon.gestProd')
                    </x-makinon-primary-link-button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>@lang('makinon.usuarios')</h3>
                </div>
                <div class="card-body">
                    <p>Desde aquí podrás gestionar los usuarios de la tienda.</p>
                    <x-makinon-primary-link-button href="{{ route('listadoUsuarios') }}">@lang('makinon.gestUsu')
                    </x-makinon-primary-link-button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3>@lang('makinon.ventas')</h3>
                </div>
                <div class="card-body">
                    <p>Desde aquí podrás gestionar las ventas de la tienda.</p>
                    <x-makinon-primary-link-button href="{{ route('paginaEnConstruccion') }}">@lang('makinon.gestVent')
                    </x-makinon-primary-link-button>
                </div>
            </div>
        </div>

    </div>
@endsection