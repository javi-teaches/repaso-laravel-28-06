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
Route::get('/saludo', function () {
    return "Hola a todos";
});

Route::get('/sumar/{numero}', function ($numero) {
    return $numero + 5;
});

Route::get('/bienvenido/{nombre}/{apellido?}', function($nombre, $apellido = 'sin apellido'){
  return "Hola\" $nombre $apellido";
});

Route::get('/test', function () {
    $movies = \App\Movie::all();
    return $movies;
});

Route::get('/test2', function () {
    $genres = DB::table('genres')->where('id',3)->get();
    return $genres;
});
Route::get('/movies', 'MoviesController@index');

Route::get("/movies/{id}", "MoviesController@show");
Route::get('/genres', function(){
  $genres=\App\genre::all();
  return $genres;
});
