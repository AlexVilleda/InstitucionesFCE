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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'InstitucionController@index')->name('inicio');

Route::get('/Instituciones', 'InstitucionController@index')->name('instituciones');

Route::get('/Instituciones/crear', 'InstitucionController@create')->name('crearInstitucion');

Route::post('/Instituciones/guardar', 'InstitucionController@store')->name('guardarInstitucion');

Route::get('/Instituciones/editar/{id}', 'InstitucionController@edit')->name('editarInstitucion');

Route::put('/Instituciones/actualizar/{id}', 'InstitucionController@update')->name('actualizarInstitucion');

Route::delete('/Instituciones/eliminar/{id}', 'InstitucionController@destroy')->name('eliminarInstitucion');

// Route::get('/', 'InstitucionController@index')->name('inicio');

// Route::get('/crear', 'InstitucionController@create')->name('crear');

// Route::post('/guardar', 'InstitucionController@store')->name('guardar');

// Route::get('/editar/{id}', 'InstitucionController@edit')->name('editar');

// Route::put('/actualizar/{id}', 'InstitucionController@update')->name('actualizar');

// Route::delete('/eliminar/{id}', 'InstitucionController@destroy')->name('eliminar');