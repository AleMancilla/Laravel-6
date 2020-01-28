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

Route::get('user/{nombre}','usuario\userController@user')->where('nombre', '[A-Za-z]+');
Route::get('user1/{id}','usuario\userController@user1')->where('id', '[0-9]+');
Route::get('user2/{id}/{nombre}','usuario\userController@user2')->where(
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

Route::resource('varios','cariosmetodosrecursos');

Route::resource('varios1','cariosmetodosrecursos')->only([
    'index','show'
]);

Route::resource('varios2','cariosmetodosrecursos')->except([
    'create','store','update','destroy'
]);

Route::resource('varios3','cariosmetodosrecursos')->only([
    'index','show'
])->names([
    'index'=> 'inicio'
]);

