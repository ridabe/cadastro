@extends('layouts.app')

@section('conteudo')
<div class="alert alert-danger" role="alert">
  Pedido Numero:{{$dadosPedido->id_pedido}}  Cliente:{{$dadosCliente->name}}
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Ean</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Valor</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>

  @foreach($dadosJoin as $dadoJoin)
    <tr>
      <td>{{$dadoJoin['barcode']}}</td>
      <td>{{$dadoJoin['name']}}</td>
      <td>{{$dadoJoin['quantidade']}}</td>
      <td>{{$dadoJoin['valor']}}</td>
      <td>{{$dadoJoin['total']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection