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
    <tr>
      <td>1123123123</td>
      <td>Otto</td>
      <td>12345666</td>
      <td>34</td>
      <td><button type="button" class="btn btn-info">Deletar</button></td>
    </tr>
    <tr>
      <td>17893123123</td>
            <td>Carne</td>
            <td>12345666</td>
            <td>34</td>
      <td><button type="button" class="btn btn-info">Deletar</button></td>
    </tr>
    <tr>
      <td>1123656123</td>
            <td>Note</td>
            <td>12345666</td>
            <td>56</td>
      <td><button type="button" class="btn btn-info">Deletar</button></td>
    </tr>
  </tbody>
</table>

@endsection