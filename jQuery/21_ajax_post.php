<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax POST jQuery</title>
</head>
<body>
	<style>
		body{
			background-position: center center;
			background-size: cover;
			height: 100vh;
		}
	</style>
	<h1>Ajax POST jQuery</h1>
	<hr>
	<select id="bgs">
		<option value="">Seleccione fondo de pantalla</option>
		<option value="bg1">The Simpsons</option>
		<option value="bg2">Happy Tree Friends</option>
		<option value="bg3">Peter Pan</option>

	</select>

	<script src="js/jquery-3.1.1.js"></script>
	<script>
		$(document).ready(function() {
			$('#bgs').change(function(event) {
				$bg = $(this).val();
				if ($bg != '') {
					$.post('fondos.php', {bg: $bg}, function(data, status, xhr) {
						if (status == 'success') {
							$('body').css('background-image', data);
						}
					});
				}else{
					alert('Por favor seleccione un fondo de pantalla!');
				}
			});
		});
	</script>
	
</body>
</html>