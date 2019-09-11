@extends('layouts.app')
@section('conteudo')

<div class="container">
 <form id="form" name="form" method="Post" action="{{route('produtos.insert')}}">
 {{csrf_field()}}
   <div class="form-row align-items-center">
       <div class="col-auto my-1">
         <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
         <select class="custom-select mr-sm-2" id="id_clients" name="id_clients">
           <option selected>Choose...</option>
           @foreach($dadosCliente as $dadoCliente)
           <option value="{{$dadoCliente['id']}}">{{$dadoCliente['name']}}</option>
           @endforeach

         </select>
       </div>
     </div>
     <br>
      <div class="form-row box_pergunta" id="divSelectContainer" name="divSelectContainer">

                 <div class="col-2">
                   <input type="text" class="form-control" placeholder="Ean" id="ean" name[]="ean" onfocusout="GetEan()" value="">
                 </div>
                 <div class="col-5">
                   <input type="text" class="form-control" placeholder="Produto" id="descricao" name[]="descricao" value="">
                 </div>
                 <div class="col">
                   <input type="text" class="form-control" placeholder="Quantidade" id="quantidade" name[]="quantidade" onfocusout="ValorTotal()" value="">
                 </div>
                 <div class="col">
                   <input type="text" class="form-control" placeholder="Valor Unit" onKeyUp="MascaraMoeda(this,'.',event)"id="valor" name[]="valor" value="">
                  </div>
                  <div class="col">
                     <input type="text" class="form-control" placeholder="Valor Total"id="total" name[]="total" value="">
                  </div>
                  <input type="hidden" id="id_products" name[]="id_products" value="">
                  <div class="col">
                  <button type="button" class="small tiny alert clonador" id="botao" name="botao" onclick="javascript:cadastro.adicionarLinha();"><A HREF="#">+ PRODUTO</A></button>
                  </div>

      </div>
       <div class="col-auto my-1">
               <button type="submit" class="btn btn-primary">Submit</button>
       </div>
 </form>
</div>
<br>


@endsection