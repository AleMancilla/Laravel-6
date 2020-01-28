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



Route::get('hola', 'holaController');

Route::get('usuario/{nombre?}','usuarioController@usuariounparametro')->name('usuarionombre');

Route::get('usuario/{nombre}/comentario/{comentarioid}','usuarioController@usuariodosparametro');

Route::get('user/{nombre}',function($nombre){
    return 'Usuario '.$nombre;
})->where('nombre', '[A-Za-z]+');

Route::get('user1/{nombre}',function($nombre){
    return 'Usuario '.$nombre;
})->where('nombre', '[0-9]+');

Route::get('user2/{id}/{nombre}',function($id,$nombre){
    return 'Usuario '.$id. ' y el nombre es '.$nombre;
})->where(
    [
        'id' => '[0-9]+',
        'nombre'=> '[A-Za-z]+'
    ]
);

Route::get('prueba', function(){
    return 'Pagina de prueba...';
})->name('pruebaroute');

Route::get('redirigirprueba', function(){
    return redirect()->route('pruebaroute');
});


Route::get('redirigirprueba1', function(){
    return redirect()->route('usuarionombre', ['nombre'=>'Alejandrooo']);
});

Route::redirect('/prueba3','/prueba');

#en controladores se buscan rutas parecidas
