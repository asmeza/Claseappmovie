<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/css/app.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<img style="width: 100%; height: 250px; " alt="Bootstrap Image Preview" src="/img/cinema.png" />
				</div>
			</div>
		</div>


	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="{{route('home')}}">HOME</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">MOVIES<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{route('movie.index')}}">Listar</a>
								</li>
								<li>
									<a href="{{route('movie.create')}}">Adicionar</a>
								</li>
								<li>
									<a href="{{route('delete')}}">Eliminar</a>
								</li>
								<li>
									<a href="{{route('update')}}">Actualizar</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="{{route('report')}}">Reporte Basico</a>
								</li>


							</ul>


						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" />
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="http://www.cineland.co/cine/teatro-suchiimma.html">PREMIERS</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">LISTINGS<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="{{route('user.index')}}">listar</a>
								</li>
								<li>
									<a href="http://www.cinecalidad.to/genero-peliculas/comedia/">COMEDY</a>
								</li>
								<li>
									<a href="http://www.cinecalidad.to/genero-peliculas/terror/">TERROR</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="http://www.cinecalidad.to/genero-peliculas/drama/">DRAMA</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>

		@yield('content')

	<div class="row">
		<div class="col-md-12">
			<h3>

			</h3>
		</div>
	</div>
</div>
</body>
</html>