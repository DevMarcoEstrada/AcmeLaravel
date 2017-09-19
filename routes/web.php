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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Ruta para Acceder al Registro de Persona Natural
Route::get('admin/PersonaNatural', ['as' =>'admin/PersonaNatural', 'uses' => 'PersonaController@RegistrarPersonaNatural']);

// Ruta para Acceder al Registro de Categoria
Route::get('admin/Categoria', ['as' =>'admin/Categoria', 'uses' => 'CategoriaController@AñadirCategoria']);

// Ruta para Acceder al Registro de Producto
Route::get('admin/Producto', ['as' =>'admin/Producto', 'uses' => 'ProductoController@AñadirProducto']);

// Ruta para Acceder al Registro de Producto
Route::get('admin/PersonaJuridica', ['as' =>'admin/PersonaJuridica', 'uses' => 'PersonaJuridicaController@RegistrarPersonaJuridica']);

// Ruta para Acceder al Mostrar de Producto
Route::get('admin/MostrarProductos', ['as' =>'admin/MostrarProductos', 'uses' => 'ProductoController@MostrarProductos']);


// Ruta para Guardar Registro de Producto
Route::post('admin/Producto', ['as' =>'admin/Producto', 'uses' => 'ProductoController@GuardarProducto']);

// Ruta para Guardar Registro de Producto
Route::post('admin/PersonaJuridica', ['as' =>'admin/PersonaJuridica', 'uses' => 'PersonaJuridicaController@GuardarPersonaJuridica']);

// Ruta para Guardar Registro de Categoria
Route::post('admin/Categoria', ['as' =>'admin/Categoria', 'uses' => 'CategoriaController@GuardarCategoria']);

// Ruta para Guardar Registro de Persona Natural
Route::post('admin/PersonaNatural', ['as' =>'admin/PersonaNatural', 'uses' => 'PersonaController@GuardarPersonaNatural']);

// Rutas Llamadas Ajax de Zonas.
Route::post('Zona/Listar_Provincias_x_Departamento/{id}',['as' => 'Zona/Listar_Provincias_x_Departamento', 'uses' => 'ZonaController@Listar_Provincias_x_Departamento']);

Route::post('Zona/Listar_Distritos_x_Provincia/{id}',['as' => 'Zona/Listar_Distritos_x_Provincia', 'uses' => 'ZonaController@Listar_Distritos_x_Provincia']);

