@extends('layouts.app')
@section('conteudo')

<div class="container">
 <form id="form" name="form" method="Post" action="{{route('produtos.insert')}}">
 {{csrf_field()}}
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputEmail4">Nome</label>
       <input type="text" class="form-control" id="nome" name="name" value="">
     </div>
     <div class="form-group col-md-6">
       <label for="inputPassword4">Ean</label>
       <input type="text" class="form-control" id="ean" name="barcode" value="">
     </div>
   </div>

   <button type="submit" class="btn btn-primary">Salvar</button>
 </form>
</div>
<br>


@endsection