<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* ************** Rutas de proveedores **************** */
Route::get('proveedor','ControllerProveedor@vistaproveedor');
Route::post('crearproveedor','ControllerProveedor@createproveedor');
Route::post('buscarp','ControllerProveedor@buscarproveedor');
Route::get('editarproveedor/{id}','ControllerProveedor@vistaeditarproveedor');
Route::post('actualizarp/{id}','ControllerProveedor@editarproveedor');
Route::get('eliminarproveedor/{id}','ControllerProveedor@eliminarproveedor');

/* ************** Rutas del sistemas ***************** */
Route::get('home','ControllerSystem@vistahome');
Route::get('/','ControllerSystem@vistalogin');
Route::get('registro','ControllerSystem@vistaregister');
Route::post('registrar','ControllerLogin@register');
Route::post('ingresar','ControllerLogin@login');
Route::get('cerrar','ControllerLogin@logout');

/* ************** Rutas del cliente ***************** */

Route::get('cliente','ControllerCliente@vistacliente');
Route::post('creearcliente','ControllerCliente@createcliente');
Route::get('editarcliente/{id}','ControllerCliente@vistaedirarcliente');
Route::post('actualizarcliente/{id}','ControllerCliente@editarcliente');
Route::get('eliminarcliente/{id}','ControllerCliente@eliminarproveedor');
Route::post('buscarcli','ControllerCliente@buscarcliente');

/* ************** Rutas del asignacion ***************** */
Route::get('empresa','ControllerAsignacion@vistaasignacion');
Route::post('crearempresa','ControllerAsignacion@createempresa');
Route::get('editarempresa/{id}','ControllerAsignacion@vistaeditarasignacion');
Route::post('actualizarasignacion/{id}','ControllerAsignacion@editarasignacion');
Route::get('eliminarasignacion/{id}','ControllerAsignacion@eliminarasignacion');
Route::post('buscarasignacion','ControllerAsignacion@buscarasignacion');

/* RUTAS DE PRODUCTO */
Route::get('prueba', function () {
    return view('Auth.producto');
});

/* RUTAS DE NOTA */
Route::get('prueban', function () {
    return view('Auth.nota');
});

/* RUTAS DE MARCA */
Route::get('pruebam', function () {
    return view('Auth.marca');
});

/* RUTAS DE Empleado */
Route::get('pruebae', function () {
    return view('Auth.empleado');
});

/* RUTAS Detalle Producto */
Route::get('pruebad', function () {
    return view('Auth.detalleproducto');
});
/* Ruta de PrecioProducto */
Route::get('preciop', function () { return view('Auth.preciosproductos'); });
/* Ruta Saldo por pagar */
Route::get('saldoporpagar', function () { return view('Auth.saldoporpagar'); });
/* Ruta de traslado dinero */

/* Ruta traslado */
Route::get('traslado', function () { return view('Auth.traslado'); });
/* Ruta tipo pago*/
Route::get('tipopago', function () { return view('Auth.tipopago'); });
/* Ruta saldo por cobrar */
Route::get('saldoporcobrar', function () { return view('Auth.saldoporcobrar'); });
/* Ruta presentacion producto */
Route::get('presentacionp', function () { return view('Auth.presentacionproducto'); });
/* Ruta presentacion */
Route::get('presentacion', function () { return view('Auth.presentacion'); });
/* Ruta pagos */
Route::get('pagos', function () { return view('Auth.pagos'); });
/* Ruta pago mixto */
Route::get('pagomixto', function () { return view('Auth.pagomixto'); });
/* Rutas de empresa */
Route::get('sucursal', 'ControllerEmpresa@vistaempresa');
Route::post('buscarempresa','ControllerEmpresa@buscarempresa');
Route::get('editarempresa/{id}','ControllerEmpresa@vistaeditarempresa');
Route::post('createsucursal','ControllerEmpresa@createsucursal');
Route::post('actualizarsucursal/{id}','ControllerEmpresa@editarempresa');
Route::get('eliminarsucursal/{id}','ControllerEmpresa@eliminarempresa');
/*Rutas de categoria */
Route::get('categoria','ControllerCategoria@vistacategoria');
Route::post('buscarcategoria','ControllerCategoria@buscarcategoria');
Route::get('editarcategoria/{id}','ControllerCategoria@vistaeditarcategoria');
Route::post('crearcategoria','ControllerCategoria@createcategoria');
Route::post('actualizarcategoria/{id}','ControllerCategoria@editarcategoria');
Route::get('eliminarcategoria/{id}','ControllerCategoria@eliminarcategoria');