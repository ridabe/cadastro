@extends('layouts.app')
@section('conteudo')

<div class="alert alert-danger" role="alert">
          <p>{{$resposta}}</p>
</div>
<div class="container">
 <form id="form" name="form" method="Post" action="{{route('clientes.insert')}}">
 {{csrf_field()}}
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputEmail4">Nome</label>
       <input type="text" class="form-control" id="name" name="name" value="teste">
     </div>
     <div class="form-group col-md-6">
       <label for="inputPassword4">Email</label>
       <input type="text" class="form-control" id="email" name="email" value="">
     </div>
   </div>
   <div class="form-group">
     <label for="inputAddress">CPF</label>
     <input type="text" class="form-control"name="cpf" id="cpf"  maxlength="14" OnBlur="ValidaCPF();" values="">
   </div>
   <div class="form-group">
     <label for="inputAddress2">Endereço</label>
     <input type="text" class="form-control" id="endereco" name="endereco" value="">
   </div>

   <button type="submit" class="btn btn-primary">Salvar</button>
 </form>
</div>
<br>


@endsection