<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <title>Teste - Vaga</title>
<script>
    function ValidaCPF(){

    var cpf=document.forms.form.cpf.value;
    var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;
    if (cpfValido.test(cpf) == false)    {

       cpf = cpf.replace( /\D/g , ""); //Remove tudo o que não é dígito

       if (cpf.length==11){
    	  cpf = cpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
    	  cpf = cpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
    	  //de novo (para o segundo bloco de números)
    	  cpf = cpf.replace( /(\d{3})(\d{1,2})$/ , "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos

    	  var valorValido = document.getElementById("cpf").value = cpf;
    	}else{
    	  console.log("CPF invalido");
    	}

    }
    }

    //Mascara moeda
    function MascaraMoeda(objTextBox,  SeparadorDecimal, e){
        var SeparadorMilesimo = '';
        var sep = 0;
        var key = '';
        var i = j = 0;
        var len = len2 = 0;
        var strCheck = '0123456789';
        var aux = aux2 = '';
        var whichCode = (window.Event) ? e.which : e.keyCode;
        if (whichCode == 13) return true;
        key = String.fromCharCode(whichCode); // Valor para o código da Chave
        if (strCheck.indexOf(key) == -1) return false; // Chave inválida
        len = objTextBox.value.length;
        for(i = 0; i < len; i++)
            if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
        aux = '';
        for(; i < len; i++)
            if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
        aux += key;
        len = aux.length;
        if (len == 0) objTextBox.value = '';
        if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
        if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
        if (len > 2) {
            aux2 = '';
            for (j = 0, i = len - 3; i >= 0; i--) {
                if (j == 3) {
                    aux2 += SeparadorMilesimo;
                    j = 0;
                }
                aux2 += aux.charAt(i);
                j++;
            }
            objTextBox.value = '';
            len2 = aux2.length;
            for (i = len2 - 1; i >= 0; i--)
            objTextBox.value += aux2.charAt(i);
            objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
        }
        return false;
    }


function GetEan(){

var ean = document.getElementById('ean').value;

		//Início do Comando AJAX
		 $.get('pesquisar/'+ ean, function(dadosProduto){
		 $.each(dadosProduto,function(key,value){
		  document.getElementById('descricao').value = value.name;
		  document.getElementById('valor').value = value.valor;
		 })



         });
	}

	function ValorTotal(){

    var valor = document.getElementById('valor').value;
    var quantidade = document.getElementById('quantidade').value;

    		  document.getElementById('total').value = valor *quantidade;
    	}

    	var cadastro = {
        		linha: 	'<div class="col-2"><input type="text" class="form-control" placeholder="Ean" id="ean" name[]="ean" onfocusout="GetEan()" value=""></div>'+
        				'<div class="col-5"><input type="text" class="form-control" placeholder="Produto" id="descricao" name[]="descricao" value=""></div>'+
        				'<div class="col"><input type="text" class="form-control" placeholder="Quantidade" id="quantidade" name[]="quantidade" onfocusout="ValorTotal()" value=""></div>'+
        				'<div class="col"><input type="text" class="form-control" placeholder="Valor Unit" onKeyUp="MascaraMoeda(this,".",event)"id="valor" name[]="valor" value=""></div>'+
        				'<div class="col"><input type="text" class="form-control" placeholder="Valor Total"id="total" name[]="total" value=""></div>'+
        				'<input type="hidden" id="id_products" name[]="id_products" value="">',


        		adicionarLinha: function(){
        			//encontrar o elemento com id "tblCadastroTBody" (tbody)
        			var tbody = document.getElementById('divSelectContainer');

        			//criar um novo elemento do tipo TR
        			var tr = document.createElement('div');
        			tr.classList.add('form-row','box_pergunta');
        			//colocar o conteúdo da linha no TR
        			tr.innerHTML = cadastro.linha;

        			//inserir a linha criada no tbody
        			tbody.appendChild(tr);
        		}
        	}

    </script>
  </head>
  <body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="alert alert-primary" role="alert">
          <ul class="nav">
          <li class="nav-item">
             <a class="nav-link " href="{{ route('home')}}">Home</a>
           </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('clientes.cad_cli')}}">Cadastrar Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('produtos.cad_prod')}}">Cadastrar Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('clientes.index')}}">Listar Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('produtos.lista_produtos')}}">Listar Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pedidos.lista_pedidos')}}">Listar Pedidos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  @yield('navegacao')
    @yield('conteudo')
    @yield('rodape')

    <div class="alert alert-dark" role="alert">
      <p>Ricardo Bene - 11-94522-4263 - ridabe@uol.com.br</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>