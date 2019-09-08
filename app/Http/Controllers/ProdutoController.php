<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        return view('produtos.lista_produtos');
    }
}
