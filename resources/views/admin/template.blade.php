<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel de administración</title>
	<link href="https://bootswatch.com/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>
<body>

	@if(\Session::has('message'))
		@include('admin/partials/message')
	@endif
	
	@include('admin/partials/nav')

	@yield('content')

	@include('admin/partials/footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{ asset('admin/js/main.js') }}"></script>
</body>
</html>