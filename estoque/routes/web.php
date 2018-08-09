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

/*Route::get('/', function()
{
  return '<h1>Primeira lógica com Laravel</h1>';
});
/*dois parâmetros são passados, o primeiro é o path que será acessado pelo navegador.
// O segundo é uma função coma resposta a ser enviada.
//Em poucas palavras,esse código ensina que, quando alguém acessar a URL /, o
Laravel deve retornar o texto Primeira lógica com Laravel para o navegador.

Route::get('/outra', function()
{
  return '<h1>Outra lógica com Laravel</h1>';
});

Route::get('/olamundo', function()
{
  return '<h1>Olá, Mundo!</h1>';
});*/

// Se fosse utilizado no /outra o mesmo path da primeira rota, a segunda rota sobreescreveria a primeira.
//Ou seja,em caso de ambiguidade sempre a última rota é quem será registrada.

Route::get('/produtos', 'ProdutoController@lista');//quando uma requisição for feita para a URL /produtos, o método lista
//do ProdutoController será executado
