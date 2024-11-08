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


Route::get('/hola',function(){
	return "Hola Mundo,";
});
Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');



// routes/web.php

// routes/web.php
///Equipos --
Route::get('/equipos', 'EquiposController@index')->name('equipos.index');
Route::get('/equipos/create', 'EquiposController@create')->name('equipos.create');
Route::post('/equipos', 'EquiposController@store')->name('equipos.store');
Route::get('/equipos/{id}', 'EquiposController@show')->name('equipos.show');
Route::get('/equipos/{id}/edit', 'EquiposController@edit')->name('equipos.edit');
Route::put('/equipos/{id}', 'EquiposController@update')->name('equipos.update');
Route::delete('/equipos/{id}', 'EquiposController@destroy')->name('equipos.destroy');


///Gagets
// routes/web.php

Route::get('/Perifericos', 'GadgetsController@index')->name('gadgets.index');
Route::get('/Perifericos/create', 'GadgetsController@create')->name('gadgets.create');
Route::post('/Perifericos', 'GadgetsController@store')->name('gadgets.store');
Route::get('/Perifericos/{id}', 'GadgetsController@show')->name('gadgets.show');
Route::get('/Perifericos/{id}/edit', 'GadgetsController@edit')->name('gadgets.edit');
Route::put('/Perifericos/{id}', 'GadgetsController@update')->name('gadgets.update');
Route::delete('/Perifericos/{id}', 'GadgetsController@destroy')->name('gadgets.destroy');

//Seguimiento:..

Route::get('/solicitudes', 'SolicitudesController@index')->name('solicitudes.index');
Route::get('/solicitudes/create', 'SolicitudesController@create')->name('solicitudes.create');
Route::post('/solicitudes', 'SolicitudesController@store')->name('solicitudes.store');
Route::get('/solicitudes/{id}', 'SolicitudesController@show')->name('solicitudes.show');
Route::get('/solicitudes/{id}/edit', 'SolicitudesController@edit')->name('solicitudes.edit');
Route::put('/solicitudes/{id}', 'SolicitudesController@update')->name('solicitudes.update');
Route::delete('/solicitudes/{id}', 'SolicitudesController@destroy')->name('solicitudes.destroy');

// Rutas adicionales para el historial de progreso
Route::post('/solicitudes/{id}/progress', 'SolicitudesController@addProgress')->name('solicitudes.addProgress');
Route::get('/solicitudes/{id}/progress', 'SolicitudesController@viewProgress')->name('solicitudes.viewProgress');

//Rutas de Alertas
Route::get('/alertas', 'AlertasController@index')->name('alertas.index');
Route::get('/alertas/{id}', 'AlertasController@show')->name('alertas.show');
Route::put('/alertas/{id}', 'AlertasController@update')->name('alertas.update');
