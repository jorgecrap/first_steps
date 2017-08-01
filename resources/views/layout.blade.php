<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mis notas</title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
		<link rel="stylesheet" type="text/css" href="/css/app.css"> 
	</head>

	<body>
		<nav class="u-full-width" >
			<h1 ><a href="{{url('notes')}}">NOTASApp</a></h1>
		</nav>

		<div id="wrap" class="container">

			@yield('content')

		</div>
		
		<footer class="row u-full-width">
			<p>NOTASApp | Aplicación de creación de notas</p> 
		</footer>

	</body>
</html>