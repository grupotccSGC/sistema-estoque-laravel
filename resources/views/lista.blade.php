	@extends('home')	

	@section('conteudo')


	@if(empty($dados))
	<div class="alert alert-sucess">
		<p>Você não tem produtos cadastrados</p>
	</div>
@else
    <h1>Lista de Produtos</h1>
	<table class="table table-hover">

		<thead>
			<tr>
				<th>Nome</th>
				<th>Descrição</th>
				<th>quantidade</th>
				<th>valor</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($dados as $v){?>

				<tr class="{{$v->quantidade <= 1 ? 'danger':''}}
					">

					<td>{{$v->nome}}</td>
					<td>{{$v->descricao}}</td>
					<td>{{$v->quantidade}}</td>
					<td>{{$v->valor}}</td>
					<td>
						<a href="produto/remove/{{$v->id}}" onclick="a({{$v->id}})">delete</a>
					</td> 
					<td><a href="produto/mostra/{{ $v->id }}">exibir</a></td>

				</tr>
			<?php }?>
		</tbody>
	</table>
@endif
	<h4>
		<span class="label label-danger pull-right">Um ou menos itens no estoque</span>
	</h4>
@if(old('nome'))
 <div class="alert alert-success">
 	<strong>Sucess!</strong>
 	<p> O produto {{old('nome') }} foi adicionado.</p>
</div>
@endif


	<script type="text/javascript">

		function a(id){
			alert(id);
		}
	</script>


	@stop

