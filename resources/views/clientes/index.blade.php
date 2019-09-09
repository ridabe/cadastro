@extends('layouts.app')

@section('conteudo')
<div class="alert alert-danger" role="alert">

</div>
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
      <td><a href="{{route('clientes.destroy',$dado['id'])}}" type="button" class="btn btn-danger" id="delete">Apagar Registo</a></td>
                 @endforeach
    </tr>
  </tbody>
</table>
<br>

@endsection