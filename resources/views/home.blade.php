<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Controle de Estoque</title>

	<link rel="stylesheet" href="css/app.css">
	<style>
	nav.navbar{
		background-color: #337ab7;
		border-color: #2e6da4;
	
	}	
	nav.navbar a {
		color: white;
	}
	li p.navbar-text, a.navbar-brand{
		color: white;
		font-weight: bolder;
	}

	footer.footer{
		background-color: #337ab7;
		border-color: #2e6da4;
		margin-top: 20px;
		color: white;
	    border-radius: 5px;
}

footer,p{
	padding: 10px;

}

</style>
</head>
<body>

	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Estoque Laravel</a>
			</div>

			<ul class="nav navbar-nav navbar-right">
			<li> <a href="{{action('ProdutorController@lista')}}">Listagem</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
	<li><a href="{{action('ProdutorController@novo')}}">Novo</a></li>
			</ul>
		</div>


	</nav>




	<div class="container-fluid">
		@yield('conteudo')
		
	</div>


	<footer class="footer">
		<p> Livro de Laravel- codigo</p>
	</footer>

</body>
</html>

