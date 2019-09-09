@extends('layouts.app')

@section('conteudo')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">CPF</th>
      <th scope="col">Endereço</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($dados as $dado)
    <tr>
      <td>{{$dado['name']}}</td>
      <td>{{$dado['email']}}</td>
      <td>{{$dado['cpf']}}</td>
      <td>{{$dado['endereco']}}</td>
      <td><button type="button" class="btn btn-info">Deletar</button></td>
   @endforeach
    </tr>
  </tbody>
</table>
<br>

@endsection