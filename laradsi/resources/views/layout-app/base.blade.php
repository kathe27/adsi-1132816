<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>

	@include('layout-app.navbar')

	<div class="container container-navbar">
		@yield('content')
	</div>

	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('form').on('click', '.btn-delete', function(event) {
				event.preventDefault();
				if(confirm("Realmente desea eliminar este Registro ?")) {
					$(this).parent().submit();
				}
			});

			$('form').on('click', '.btn-upload', function(event){
				event.preventDefault();
				$('#upload').click();
			});

       		$('#ncategory').keyup(function(event){
            	$name = $(this).val();
            	$token = $('input[name=_token]').val();
            	$.post('/ajaxsearch', { _token:$token, name: $name }, function(data){
            		$('tbody').html('<img src="{{ asset('/imgs/loader.gif')}}">');

				setTimeout(function(){ 
 					$.post('/ajaxsearch', {_token:$token, name: $name}, function(data) {
				 	$('tbody').html(data);
				});
	 			}, 1000);
            		

       		});
        });
    });
	
	</script>

</body>
</html>