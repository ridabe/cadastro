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
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>12345666</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-info">Deletar</button></td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>12345666</td>
      <td>@fat</td>
      <td><button type="button" class="btn btn-info">Deletar</button></td>
    </tr>
    <tr>
      <td>Larry the Bird</td>
      <td>@twitter</td>
      <td>12345666</td>
      <td>@twitter</td>
      <td><button type="button" class="btn btn-info">Deletar</button></td>
    </tr>
  </tbody>
</table>

@endsection