<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

</head>
<body>

	@include('layout-app.navbar')
	<div class="container container-navbar">
		@yield('content')
	</div>

	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>