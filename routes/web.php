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
    Route::get('/cad_cli',['uses'=>'ClienteController@novo','as'=>'clientes.cad_cli']);
    Route::post('/insert',['uses'=>'ClienteController@insert','as'=>'clientes.insert']);
    Route::get('/{id}/delete',['uses'=>'ClienteController@destroy','as'=>'clientes.destroy']);
});

Route::group(['prefix'=>'produtos'],function(){
    Route::get('/',['uses'=>'ProdutoController@lista','as'=>'produtos.lista_produtos']);
    Route::get('/cad_prod',['uses'=>'ProdutoController@novo','as'=>'produtos.cad_prod']);
    Route::post('/insert',['uses'=>'ProdutoController@insert','as'=>'produtos.insert']);
    Route::get('/{id}/delete',['uses'=>'ProdutoController@destroy','as'=>'produtos.destroy']);
});

Route::group(['prefix'=>'pedidos'],function(){
    Route::get('/',['uses'=>'PedidoController@lista','as'=>'pedidos.lista_pedidos']);
    Route::get('/cad_pedidos',['uses'=>'PedidoController@novo','as'=>'pedidos.cad_pedidos']);
    Route::get('/detalhar/{id}',['uses'=>'PedidoController@detalhar','as'=>'pedidos.detalhar']);

});