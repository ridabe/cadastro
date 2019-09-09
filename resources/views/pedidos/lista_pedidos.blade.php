@extends('layouts.app')

@section('conteudo')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Pedido</th>
      <th scope="col">Cliente</th>
      <th scope="col">Valor</th>
      <th scope="col">Detalhar</th>
    </tr>
  </thead>
  <tbody>

  @foreach($dadosJojn as $dadoJojn)
    <tr>
      <td>{{$dadoJojn['id']}}</td>
      <td>{{$dadoJojn['name']}}</td>
      <td>{{$dadoJojn['total']}}</td>
      <td><a href="{{route('pedidos.detalhar',$dadoJojn['id'])}}" type="button" class="btn btn-danger" id="delete">Detalhar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection