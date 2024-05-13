<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\IdiomaController;
use App\Livewire\BuscadorProductos;
use App\Livewire\BuscadorProductosAdministracion;
use App\Models\Marca;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\TarjetaCreditoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AngularController;
use App\Http\Controllers\ProductoColorTallaController;
use App\Http\Controllers\FacturaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rutas para Livewire
Route::get('/buscador-productos', BuscadorProductos::class)->name('buscador-productos');


// Ruta que redirige al usuario a la vista de inicio
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Ruta para cambiar el idioma
Route::get('cambiarIdioma/{idioma}', [IdiomaController::class, 'cambiarIdioma'])->name('cambiarIdioma');

Route::get('/perfil', [UsuarioController::class, 'usuarioAutentificado'])->name('usuario.perfil');
Route::get('/modificarUsuario', [UsuarioController::class, 'editarUsuario'])->name('usuario.modificarUsuario');
Route::post('/modificarUsuario', [UsuarioController::class, 'updateUsuario'])->name('updateUsuario');

Route::delete('deleteUsuario', [UsuarioController::class, 'deleteUsuario'])->name('deleteUsuario')->middleware('auth'); //Eliminar usuario por parte del propio usuario
Route::get('cambiarPassword', [UsuarioController::class, 'cambiarPassword'])->name('cambiarPassword')->middleware('auth');
Route::post('cambiarPassword', [UsuarioController::class, 'actualizarPassword'])->name('updatePassword')->middleware('auth');



/*
Rutas de los usuarios relacionadas con el administrador
*/
Route::middleware(['auth', 'rol:admin'])->group(function () {
    Route::get('/panelAdmin', [UsuarioController::class, 'panelAdmin'])->name('usuario.panelAdmin');
    Route::get('listadoUsuarios', [UsuarioController::class, 'listarUsuarios'])->name('listadoUsuarios');
    Route::get('añadirUsuario', [UsuarioController::class, 'nuevoUsuarioAdmin'])->name('añadirUsuario');
    Route::post('agregarUsuarioAdmin', [UsuarioController::class, 'agregarUsuarioAdmin'])->name('agregarUsuarioAdmin');
    Route::get('buscarUsuario', [UsuarioController::class, 'buscarUsuario'])->name('buscarUsuario');
    Route::get('fichaUsuarioAdmin/{id}', [UsuarioController::class, 'fichaUsuario'])->name('fichaUsuarioAdmin');
    Route::get('modificarUsuarioAdmin/{id}', [UsuarioController::class, 'editarUsuarioAdmin'])->name('modificarUsuarioAdmin');
    Route::post('modificarUsuarioAdmin/{id}', [UsuarioController::class, 'updateUsuarioAdmin'])->name('updateUsuarioAdmin');
    Route::delete('eliminarUsuario/{id}', [UsuarioController::class, 'eliminarUsuario'])->name('eliminarUsuario'); //Eliminar usuario por parte de la administracion pasando su id
});

/*
Rutas para los proveedores
*/

Route::middleware(['auth', 'rol:admin'])->group(function () {
    Route::get('/listadoProveedores', [ProveedorController::class, 'datosProveedores'])->name('listadoProveedores');
    Route::get('/fichaProveedor/{id}', [ProveedorController::class, 'fichaProveedor'])->name('fichaProveedor');
    Route::get('/añadirProveedor', [ProveedorController::class, 'nuevoProveedor'])->name('añadirProveedor');
    Route::post('/agregarProveedor', [ProveedorController::class, 'agregarProveedor'])->name('agregarProveedor');
    Route::get('modificarProveedor/{id}', [ProveedorController::class, 'editarProveedor'])->name('modificarProveedor');
    Route::post('modificarProveedor/{id}', [ProveedorController::class, 'updateProveedor'])->name('updateProveedor');
    Route::delete('eliminarProveedor/{id}', [ProveedorController::class, 'eliminarProveedor'])->name('eliminarProveedor');
    Route::get('buscarProveedor', [ProveedorController::class, 'buscarProveedor'])->name('buscarProveedor');
});

/*
Rutas para los productos
*/
Route::get('productos/{tipo}', [ProductoController::class, 'vistasAllProductos'])->name('productos.tipo');
Route::get('/productos/marca/{nombreMarca}', [ProductoController::class, 'vistasPorMarca'])->name('productos.marca');
Route::get('vistaProducto/{id}', [ProductoController::class, 'vistaProducto'])->name('vistaProducto');
Route::get('/componentes', function () {
    $marcas = Marca::all();
    return view('producto.componentes', ['marcas' => $marcas]);
})->name('componentes');
Route::get('/accesorios', function () {
    $marcas = Marca::all();
    return view('producto.accesorios', ['marcas' => $marcas]);
})->name('accesorios');
Route::get('/alimentacion', function () {
    $marcas = Marca::all();
    return view('producto.alimentacion', ['marcas' => $marcas]);
})->name('alimentacion');

Route::middleware(['auth', 'rol:admin'])->group(function () {
    Route::get('listadoProductos', [ProductoController::class, 'listarProductos'])->name('listadoProductos');
    Route::get('fichaProducto/{id}', [ProductoController::class, 'fichaProducto'])->name('fichaProducto');
    Route::get('añadirProducto', [ProductoController::class, 'nuevoProducto'])->name('añadirProducto');
    Route::post('agregarProducto', [ProductoController::class, 'agregarProducto'])->name('agregarProducto');
    Route::get('modificarProducto/{id}', [ProductoController::class, 'editarProducto'])->name('modificarProducto');
    Route::post('modificarProducto/{id}', [ProductoController::class, 'updateProducto'])->name('updateProducto');
    Route::delete('eliminarProducto/{id}', [ProductoController::class, 'eliminarProducto'])->name('eliminarProducto');
    Route::get('buscarProducto', [ProductoController::class, 'buscarProducto'])->name('buscarProducto');
    Route::get('/listadoProductosProveedor/{id}', [ProductoController::class, 'listarProductosProveedor'])->name('listadoProductosProveedor');
});

/*
Ruta para las Marcas
*/
Route::post('nuevaMarca', [MarcaController::class, 'nuevaMarca'])->name('nuevaMarca');

/*
Ruta para los Colores
*/
Route::post('nuevoColor', [ColorController::class, 'nuevoColor'])->name('nuevoColor');

/*
Ruta para las Tallas
*/
Route::post('nuevaTalla', [TallaController::class, 'nuevaTalla'])->name('nuevaTalla');

/*
Ruta para la página del taller
*/
Route::get('/taller', function () {
    return view('taller');
})->name('taller');


/*
Ruta para la factura de muestra
*/
Route::get('/factura', [FacturaController::class, 'muestraFactura'])->name('factura');

/*
Ruta para el carrito de la compra
*/
Route::get('/carrito', [CarritoController::class, 'mostrarCarrito'])->name('carrito');
Route::delete('eliminarDelCarrito', [CarritoController::class, 'eliminarDelCarrito'])->name('eliminarDelCarrito');
Route::post('añadirAlCarrito', [CarritoController::class, 'añadirAlCarrito'])->name('añadirAlCarrito');

/*
Rutas para los pedidos
*/
Route::post('realizar-pedido', [PedidoController::class, 'realizarPedido'])->name('realizar-pedido')->middleware('auth');
Route::get('realizar-pedido', [PedidoController::class, 'realizarPedido'])->name('realizar-pedido')->middleware('auth');
Route::post('confirmar-pedido', [PedidoController::class, 'confirmarPedido'])->name('confirmar-pedido')->middleware('auth');
Route::delete('confirmar-pedido', [PedidoController::class, 'confirmarPedido'])->name('confirmar-pedido')->middleware('auth');
Route::get('pedido-confirmado', [PedidoController::class, 'pedidoConfirmado'])->name('pedido-confirmado')->middleware('auth');
Route::post('registrarTarjeta', [TarjetaCreditoController::class, 'registrarTarjeta'])->name('registrarTarjeta')->middleware('auth');
Route::get('mis-pedidos', [PedidoController::class, 'misPedidos'])->name('mis-pedidos')->middleware('auth');
Route::get('pedido-detalle/{id}', [PedidoController::class, 'pedidoDetalle'])->name('pedido-detalle')->middleware('auth');

Route::get('listadoPedidos', [PedidoController::class, 'listarPedidos'])->name('listadoPedidos')->middleware('auth', 'rol:admin');
Route::put('modificarEstadoPedido/{id}', [PedidoController::class, 'modificarEstadoPedido'])->name('modificarEstadoPedido')->middleware('auth', 'rol:admin');
Route::post('/actualizarStock', [ProductoColorTallaController::class, 'actualizarStock']);

/*
Ruta para la factura una asociada la numero de pedido y la otra asociada al numero de factura
*/
Route::get('/factura/{id_factura}', [FacturaController::class, 'generarFactura'])->name('factura')->middleware('auth');
Route::get('/factura-pedido/{id_pedido}', [FacturaController::class, 'generarFacturaPorPedido'])->name('factura-pedido')->middleware('auth');
Route::get('/factura/descargar/{id_pedido}', [FacturaController::class, 'descargarFacturaPorPedido'])->name('factura/descargar')->middleware('auth');


/*
Ruta para el enviar el email
*/
Route::get('/sendMail', [MailController::class, 'sendMail'])->name('sendMail');

/*
Ruta para la página en construcción
*/
Route::get('/paginaEnConstruccion', function () {
    return view('paginaEnConstruccion');
})->name('paginaEnConstruccion');

/*
Ruta para la página del taller
*/
Route::get('/citaTaller', [AngularController::class, 'connectToAngular'])->name('citaTaller')->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
