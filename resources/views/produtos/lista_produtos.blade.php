@extends('layouts.app')

@section('conteudo')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Ean</th>
      <th scope="col">Produto</th>
      <th scope="col">Valor</th>
      <th scope="col">Estoque</th>
    </tr>
  </thead>
  <tbody>
  @foreach($dados as $dado)
    <tr>
      <td>{{$dado['barcode']}}</td>
      <td>{{$dado['name']}}</td>
      <td>{{$dado['valor']}}</td>
      <td>{{$dado['estoque']}}</td>
      <td><button type="button" class="btn btn-info">Deletar</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection