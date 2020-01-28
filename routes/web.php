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



Route::get('hola', function() {
    return 'Hola Alejandro Mancilla';
});

Route::get('usuario/{nombre?}',function($nombre='Invitado'){
    return 'Usuario '.$nombre;
});

Route::get('usuario/{nombre}/comentario/{comentarioid}',function($nombre, $comentarioid){
    return 'Usuario '.$nombre.' y el comentario es '.$comentarioid;
});

Route::get('user/{nombre}',function($nombre){
    return 'Usuario '.$nombre;
})->where('nombre', '[A-Za-z]+');

Route::get('user1/{nombre}',function($nombre){
    return 'Usuario '.$nombre;
})->where('nombre', '[0-9]+');
