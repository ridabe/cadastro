<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function lista()
    {
       return view('clientes.index');
    }
}
