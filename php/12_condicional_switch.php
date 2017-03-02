<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional Switch PHP</title>
</head>
<body>
	<h1>Condicional Switch PHP</h1>
	<hr>

	<?php 
		$ndia =date('w');
		
		switch ($ndia) {
			case 1:
				echo "Hoy Es Lunes";
				break;
			case 2:
				echo "Hoy Es Martes";
				break;
			case 3:
				echo "Hoy Es Miercoles";
				break;
			case 4:
				echo "Hoy Es Jueves";
				break;
			case 5:
				echo "Hoy Es Viernes";
				break;
			
			default:
				echo "Feliz Fin De Semana";
				break;
		}

		
	 ?>
</body>
</html>