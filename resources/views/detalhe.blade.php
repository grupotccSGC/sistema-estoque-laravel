
	
@extends('home')	

@section('conteudo')
@if(empty($p))
<div><p>Não ha produto</p></div>
@else

<h1>Detalhes de produto :{{$p->nome}}</h1>

<form action="{{ action('ProdutorController@atualizar')}}" class="form" method="POST">
  
  <input type="hidden" name="id" required value="{{$p->id}}">

	<input type="hidden" name="_token" value="{{csrf_token()}}" required="">
	
	<div class="form-group">
		<label>Nome</label>
		<input type="text" class="form-control" name="nome" required value="{{$p->nome}}">
	</div>

<div class="form-group">
		<label>Descricao</label>
		<input type="text" class="form-control" name="descricao" required value="{{$p->descricao}}">
	</div>


<div class="form-group">
		<label>Quantidade</label>
		<input type="number" class="form-control" name="quantidade" required value="{{$p->quantidade}}">
	</div>

<div class="form-group">
		<label>Valor</label>
		<input type="text" class="form-control" name="valor" required value="{{$p->valor}}">
	</div>


<button class="btn btn-primary">atualizar</button>


</form>







@endif
@stop

