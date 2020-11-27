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

//Socios
Route::get('/api/socios','SociosController@index');
Route::post('/api/socio/guardar','SociosController@store')->name('guardar');
Route::put('/api/socio/actualizar','SociosController@update')->name('actualizar');
Route::delete('/api/socio/eliminar','SociosController@destroy')->name('eliminar');
//Cantantes
Route::get('/api/cantante','CantantesController@index');
Route::post('/api/cantante/guardar','CantantesController@store')->name('guardar');
Route::put('/api/cantante/actualizar','CantantesController@update')->name('actualizar');
Route::delete('/api/cantante/eliminar','CantantesController@destroy')->name('eliminar');
//Maestros
Route::get('/api/maestro','MaestrosController@index');
Route::post('/api/maestro/guardar','MaestrosController@store')->name('guardar');
Route::put('/api/maestro/actualizar','MaestrosController@update')->name('actualizar');
Route::delete('/api/maestro/eliminar','MaestrosController@destroy')->name('eliminar');
//Estudiantes
Route::get('/api/estudiante','EstudiantesController@index');
Route::post('/api/estudiante/guardar','EstudiantesController@store')->name('guardar');
Route::put('/api/estudiante/actualizar','EstudiantesController@update')->name('actualizar');
Route::delete('/api/estudiante/eliminar','EstudiantesController@destroy')->name('eliminar');
//Profesores
Route::get('/api/profesor','ProfesoresController@index');
Route::post('/api/profesor/guardar','ProfesoresController@store')->name('guardar');
Route::put('/api/profesor/actualizar','ProfesoresController@update')->name('actualizar');
Route::delete('/api/profesor/eliminar','ProfesoresController@destroy')->name('eliminar');
//Interpretes
Route::get('/api/interprete','InterpretesController@index');
Route::post('/api/interprete/guardar','InterpretesController@store')->name('guardar');
Route::put('/api/interprete/actualizar','InterpretesController@update')->name('actualizar');
Route::delete('/api/interprete/eliminar','InterpretesController@destroy')->name('eliminar');
//Universitarios
Route::get('/api/universitario','UniversitariosController@index');
Route::post('/api/universitario/guardar','UniversitariosController@store')->name('guardar');
Route::put('/api/universitario/actualizar','UniversitariosController@update')->name('actualizar');
Route::delete('/api/universitario/eliminar','UniversitariosController@destroy')->name('eliminar');
//Aprendices
Route::get('/api/aprendiz','AprendicesController@index');
Route::post('/api/aprendiz/guardar','AprendicesController@store')->name('guardar');
Route::put('/api/aprendiz/actualizar','AprendicesController@update')->name('actualizar');
Route::delete('/api/aprendiz/eliminar','AprendicesController@destroy')->name('eliminar');
