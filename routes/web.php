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