<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

	<div class="container">
		@yield('content')
	</div>

	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('form').on('click', '.btn-delete', function(event) {
				event.preventDefault();
				if(confirm("Realmente desea eliminar esta Categoria ?")) {
					$(this).parent().submit();
				}
			});
		});
	</script>

</body>
</html>