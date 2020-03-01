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



Auth::routes();

Route::get('/', function (){
    return view('home');
});

// RUTAS PELICULAS

Route::get('/peliculas', function (){
    return view('peliculas');
});

Route::get('/editarpelicula', function (){
    return view('editarpelicula');
});


Route::get('/peliculas', 'PeliculasController@listar');

Route::post('/editarpelicula', 'PeliculasController@editar');



// RUTAS GENEROS

Route::get('/generos', function (){
    return view('generos');
});

// RUTAS ACTORES

Route::get('/actores', function (){
    return view('actores');
});

Route::get('/crearactor', function (){
    return view('crearactor');
});

Route::post('/crearactor', 'ActoresController@agregar');


Route::get('/actores', 'ActoresController@listar');
