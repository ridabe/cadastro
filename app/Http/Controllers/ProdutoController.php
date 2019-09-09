<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\produtoRequest;

class ProdutoController extends Controller
{
    public function lista()
    {
        $dados = Product::all();
        return view('produtos.lista_produtos',compact('dados'));
    }
    public function novo()
    {
        return view('produtos.cad_prod');
    }

    public function insert(produtoRequest $dados)
    {
        Product::create($dados->all());
        return redirect(route('produtos.cad_prod'));
    }
}
