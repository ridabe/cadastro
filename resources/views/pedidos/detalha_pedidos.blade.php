@extends('layouts.app')

@section('conteudo')
<div class="alert alert-danger" role="alert">
  Pedido Nimero:
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

  @foreach($dadosJojn as $dadoJojn)
    <tr>
      <td>{{$dadoJojn['barcode']}}</td>
      <td>{{$dadoJojn['name']}}</td>
      <td>{{$dadoJojn['quantidade']}}</td>
      <td>{{$dadoJojn['valor']}}</td>
      <td>{{$dadoJojn['total']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection