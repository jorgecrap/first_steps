<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mis notas</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
		<link rel="stylesheet" type="text/css" href="/css/app.css"> 
	</head>

	<body>
		<nav>
			<h1 ><a href="{{url('notes')}}">NOTASApp</a></h1>
		</nav>

		<div id="wrap" class="container">
			@yield('content')
		</div>
		
		<footer>
			<p><strong>NOTASApp</strong> | Aplicación de creación de notas</p> 
		</footer>

	</body>
</html>