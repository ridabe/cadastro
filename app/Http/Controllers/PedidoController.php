<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;
use App\Client;
use App\Product;

class PedidoController extends Controller
{
    public function lista()
    {
        $dadosJojn = Client::where([
            ['Pedidos.id_clients', '>', '0']])
            ->join('Pedidos', 'Pedidos.id_clients', '=', 'Clients.id')->select('Pedidos.*','Clients.*')
            ->get();
        return view('pedidos.lista_pedidos',compact('dadosJojn'));
    }
    public function novo()
    {
        $dadosCliente = Client::all();
        $dadosProduto = Product::all();
        $resposta = '';
        return view('pedidos.cad_pedidos',compact('resposta','dadosCliente','dadosProduto'));
    }

    public function detalhar($id)
    {
        $dadosCliente = Client::where([
            ['Pedidos.id_pedido', '=', $id]])
            ->join('Pedidos', 'Pedidos.id_clients', '=', 'Clients.id')->select('Clients.name')->first();

        $dadosPedido = Pedido::where([
            ['id_pedido', '=', $id]])->select('id_pedido')->first();

        $dadosJoin = Client::where([
            ['Pedidos.id_pedido', '=', $id]])
            ->join('Pedidos', 'Pedidos.id_clients', '=', 'Clients.id')
            ->join('Products', 'Pedidos.id_products', '=', 'Products.id')
            ->select('Pedidos.*','Clients.*','Products.*')
            ->get();
        return view('pedidos.detalha_pedidos',compact('dadosJoin','dadosCliente','dadosPedido'));

    }
}
