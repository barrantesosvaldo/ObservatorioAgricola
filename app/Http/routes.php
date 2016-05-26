<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('menu');
});

//ProvinciaController
Route::get('/api/v1/provincia', 'ProvinciaController@obtenerProvincias');
//CantonController
Route::get('/api/v1/cantones/{id}', 'CantonController@obtenerCantones');
Route::get('/api/v1/canton/{id}', 'CantonController@obtenerCanton');
//DistritoController
Route::get('/api/v1/distritos/{id}', 'DistritoController@obtenerDistritos');
Route::get('/api/v1/distrito/{id}', 'DistritoController@obtenerDistrito');
//TipoProductoController
Route::get('/api/v1/tipo-producto', 'TipoProductoController@obtenerTipoProductos');
//ProductoController
Route::get('/api/v1/productos/{id}', 'ProductoController@obtenerProductos');
Route::get('/api/v1/producto/{id}', 'ProductoController@obtenerTipoProducto');
Route::post('/api/v1/producto/{id_tipo_producto}', 'ProductoController@guardarProducto');
Route::post('/api/v1/producto/{id}/{id_tipo_producto}', 'ProductoController@actualizarProducto');
Route::delete('/api/v1/producto/{id}', 'ProductoController@eliminarProducto');
//UnidadVentaController
Route::get('/api/v1/unidad-venta/{id_tipo_producto}', 'UnidadVentaController@obtenerUnidadesVenta');
//UbicacionExactaController
Route::get('/api/v1/ubicacion-exacta/{id}', 'UbicacionExactaController@obtenerUbicacionExacta');
//ProcedenciaController
Route::get('/api/v1/procedencia/{id_tipo_producto}', 'ProcedenciaController@obtenerProcedencias');
//PrecioController
Route::get('/api/v1/precios', 'PrecioController@obtenerPrecios');
Route::get('/api/v1/precio/{id}', 'PrecioController@obtenerPrecio');
Route::post('/api/v1/precio', 'PrecioController@guardarPrecio');
Route::post('/api/v1/precio/{id}', 'PrecioController@actualizarPrecio');
Route::delete('/api/v1/precio/{id}', 'PrecioController@eliminarPrecio');
Route::get('/api/v1/precios/media-fecha', 'PrecioController@mediaPreciosFecha');
Route::get('/api/v1/precios/media-fechas', 'PrecioController@mediaPreciosRangoFechas');



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
