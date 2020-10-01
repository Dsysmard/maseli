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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('empresas', 'EmpresasController');
Route::get('empresas/destroy/{id}', ['as' => 'empresas/destroy', 'uses' => 'EmpresasController@destroy']);
Route::post('empresas/search', ['as' => 'empresas/search', 'uses'=>'EmpresasController@search']);

Route::resource('empleados', 'EmpleadosController');
Route::get('empleados/destroy/{id}', ['as' => 'empleados/destroy', 'uses' => 'EmpleadosController@destroy']);
Route::post('empleados/search', ['as' => 'empleados/search', 'uses'=>'EmpleadosController@search']);

Route::resource('contratos', 'ContratosController');
Route::get('contratos/destroy/{id}', ['as' => 'contratos/destroy', 'uses' => 'ContratosController@destroy']);
Route::post('contratos/search', ['as' => 'contratos/search', 'uses'=>'ContratosController@search']);

Route::resource('puestos', 'PuestosController');
Route::get('puestos/destroy/{id}', ['as' => 'puestos/destroy', 'uses' => 'PuestosController@destroy']);
Route::post('puestos/search', ['as' => 'puestos/search', 'uses'=>'PuestosController@search']);

Route::resource('turnos', 'TurnosController');
Route::get('turnos/destroy/{id}', ['as' => 'turnos/destroy', 'uses' => 'TurnosController@destroy']);
Route::post('turnos/search', ['as' => 'turnos/search', 'uses'=>'TurnosController@search']);

Route::resource('pagosext', 'PagosExternosController');
Route::get('pagosext/destroy/{id}', ['as' => 'pagosext/destroy', 'uses' => 'PagosExternosController@destroy']);
Route::post('pagosext/search', ['as' => 'pagosext/search', 'uses'=>'PagosExternosController@search']);

Route::resource('estados', 'EstadosController');
Route::get('estados/destroy/{id}', ['as' => 'estados/destroy', 'uses' => 'EstadosController@destroy']);
Route::post('estados/search', ['as' => 'estados/search', 'uses'=>'EstadosController@search']);

Route::resource('asistencias', 'AsistenciasController');
Route::get('asistencias/destroy/{id}', ['as' => 'asistencias/destroy', 'uses' => 'AsistenciasController@destroy']);
Route::post('asistencias/search', ['as' => 'asistencias/search', 'uses'=>'AsistenciasController@search']);
