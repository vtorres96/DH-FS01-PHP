<?php

use Illuminate\Support\Facades\Route;

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

// retornando view
Route::get('/', function () {
    return view('welcome');
});

// retornando html
Route::get('/primeira-rota', function(){
    return "<h1>Olá Mundo Laravel</h1>";
});

// retornando html com parametro recebido da URL
Route::get('/primeira-rota-com-parametro/{nome}', function($nome){
    return "<h1>Olá, $nome</h1>";
});

// desafio dos parametros dado em aula

// 1 - criar uma rota que receba o primeiro parâmetro obrigatório e o segundo parâmetro opcional (os dois parâmetros serão números)

// 2 - esta rota se acessada com apenas um número, irá retornar este número * 2. Caso contrário, ou seja, se tiver sido acessada com dois números, irá retornar a multiplicação dos dois números 

// 3 - após efetuar o cálculo, verificar se o número é par ou não e exibir na tela.
Route::get("/multiplicacao/{numero1}/{numero2?}", function($numero1, $numero2 = null){
    if($numero2 == null){

        $resultado = $numero1 * 2;

        if($resultado % 2 == 0){
            $texto = " este número é par";
        } else {
            $texto = " este número é ímpar";
        }

        return $resultado . $texto;

    } else {
        $resultado = $numero1 * $numero2;

        if($resultado % 2 == 0){
            $texto = " este número é par";
        } else {
            $texto = " este número é ímpar";
        }

        return $resultado . $texto;
    }
});