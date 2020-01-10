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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hola', 'HolaController');

Route::get('usuario/{nombre?}', 'UsuarioController@usuariodefault')->name('usuarionombre');

Route::get('redirigir', function (){
    return redirect()->route('home') ;
});

Route::get('usuario/{nombre}/{comentarioid}','UsuarioController@usuariocomentario');

//Curso de Laravel 6 ep 3