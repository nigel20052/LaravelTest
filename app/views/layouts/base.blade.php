<!DOCTYPE html>
<html land="es">
<head>
	<title>
		@section('titulo')
			RetroFit
			@show
	</title>
	{{ HTML::style('../src/css/bootstrap.min.css') }}
    {{ HTML::style('../src/css/bootstrap-theme.min.css') }}
	<script type="text/javascript" src="../src/js/jquery.min.js"></script>
	<script type="text/javascript" src="../src/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../src/js/scripts.js"></script>
	@yield('head')
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">RetroFit</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Inicio</a>
						</li>
						<li>
							<a href="#">Proyectos</a>
						</li>
						<li>
							<a href="#">Usuarios</a>
						</li>
						<li>
							<a href="#">Reportes</a>
						</li>
						<li>
							<a href="#">Preferencias</a>
						</li>
						<li>
							<a href="#">Escanear (F12)</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Cerrar Sesión</a>
						</li>
					</ul>
				</div>
				
			</nav>
	</header>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('projects') }}">RetroFit</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('projects') }}">View All Projects</a></li>
		<li><a href="{{ URL::to('projects/create') }}">Create Project</a>
	</ul>
</nav>
	<section>
		@yield('contenido')
	</section>
	<hr>
</div>
	<footer>
		@yield('footer')
	</footer>
</body>

</html>