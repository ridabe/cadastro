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
Route::group(['prefix'=>'clientes'],function(){
    Route::get('/',['uses'=>'ClienteController@lista','as'=>'clientes.index']);
});

Route::group(['prefix'=>'produtos'],function(){
    Route::get('/',['uses'=>'ProdutoController@lista','as'=>'produtos.lista_produtos']);
});