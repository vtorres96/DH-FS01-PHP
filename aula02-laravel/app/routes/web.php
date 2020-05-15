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

// Filmes 

// rota que utilizamos para renderizar um formulario de cadastro de filme
Route::get('/filmes/adicionar', 'MoviesController@create');
// rota que utilizamos para processar as informacoes enviadas atraves da
// requisicao do preenchimento do formulario de cadastro de filmes
Route::post('/filmes/adicionar', 'MoviesController@save');

// rota que utilizamos para renderizar a listagem de filmes
Route::get('/filmes/listar', 'MoviesController@list');

