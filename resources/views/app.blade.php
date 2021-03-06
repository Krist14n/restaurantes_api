<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guia Restaurantes MB</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
		<!-- Scripts -->
		<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/dt-1.10.9,b-1.0.3/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/dt-1.10.9,b-1.0.3/datatables.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#table_id').DataTable();
		$('.dropdown-toggle').dropdown();
	});
	</script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Guía Restaurantes MB</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restaurantes Nacionales<span class="caret"></span></a>
	          					<ul class="dropdown-menu">
									<li><a href="{{ url('/zonas') }}">Zonas</a></li>
									<li><a href="{{ url('/planes') }}">Planes</a></li>
									<li><a href="{{ url('/cocinas') }}">Tipo Cocina</a></li>
									<li><a href="{{ url('/restaurantes') }}">Restaurantes</a></li>
								</ul>
						</li>
							<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Restaurantes Internacionales<span class="caret"></span></a>
	          					<ul class="dropdown-menu">

									<li><a href="{{ url('/regiones') }}">Regiones del Mundo</a></li>
									<li><a href="{{ url('/ciudades') }}">Ciudades</a></li>
									<li><a href="{{ url('/restaurantes_internacionales') }}">Restaurantes Internacionales</a></li>
								</ul>
							</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')


</body>
</html>
