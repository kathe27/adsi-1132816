<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional SiNo Si PHP</title>
</head>
<body>
	<h1>Condicional SiNo Si PHP</h1>
	<hr>

	<?php 
		$ndia =date('w');
		if($ndia ==1){
			echo "Hoy Es Lunes";
		}
		elseif($ndia ==2){
			echo "Hoy Es Martes";
		}
		elseif($ndia ==3){
			echo "Hoy Es Miercoles";
		}
		elseif($ndia ==4){
			echo "Hoy Es Jueves";
		}
		elseif($ndia ==5){
			echo "Hoy Es Viernes";
		}
		
		else{
			echo "Feliz Fin De Semana!!";
		}

		
	 ?>
</body>
</html>