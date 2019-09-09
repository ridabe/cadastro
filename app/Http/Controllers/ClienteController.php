<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use App\Client;

class ClienteController extends Controller
{
    public function lista()
    {
        $dados = Client::all();
       return view('clientes.index',compact('dados'));
    }

    public function novo()
    {
        $resposta = '';
        return view('clientes.cad_cli',compact('resposta'));
    }

    public function insert(ClienteRequest $dados)
    {
        //dd($dados['email']);
        $resposta = 'Dados inseridos com sucesso!!';
        Client::create($dados->all());
        return redirect(route('clientes.cad_cli',compact('resposta')));
    }
}
