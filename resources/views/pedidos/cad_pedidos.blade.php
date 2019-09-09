@extends('layouts.app')
@section('conteudo')

<div class="container">
 <form id="form" name="form" method="Post" action="{{route('produtos.insert')}}">
 {{csrf_field()}}
   <div class="form-row align-items-center">
       <div class="col-auto my-1">
         <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
         <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
           <option selected>Choose...</option>
           @foreach($dadosCliente as $dadoCliente)
           <option value="{{$dadoCliente['id']}}">{{$dadoCliente['name']}}</option>
           @endforeach

         </select>
       </div>
     </div>
      <div class="form-row box_pergunta" id="divSelectContainer">
                 <div class="col-2">
                   <input type="text" class="form-control" placeholder="Ean" id="selectProduto">
                 </div>
                 <div class="col-5">
                   <input type="text" class="form-control" placeholder="Produto">
                 </div>
                 <div class="col">
                   <input type="text" class="form-control" placeholder="Quantidade">
                 </div>
                 <div class="col">
                   <input type="text" class="form-control" placeholder="Valor Unit">
                  </div>
                  <div class="col">
                  <button type="button" class="small tiny alert clonador">Mais</button>
                  </div>
                  <A HREF="#" onclick="adicionarProduto()">+ PRODUTO</A>
      </div>
       <div class="col-auto my-1">
               <button type="submit" class="btn btn-primary">Submit</button>
       </div>
 </form>
</div>
<br>


@endsection