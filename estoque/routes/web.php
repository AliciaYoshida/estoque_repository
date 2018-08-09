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

Route::get('/produtos', 'ProdutoController@lista');

//Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra'); //dessa forma o id pode ser qualquer coisa, inclusive uma palavra.

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/', function () {
    return view('welcome');
});

?>
