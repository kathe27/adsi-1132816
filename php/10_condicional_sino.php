<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional SI/NO PHP</title>
</head>
<body>
	<h1>Condicional SI/NO PHP</h1>

	<?php 
		$ndia = date('w');

		if ($ndia == 0) {
			echo "Hoy es domingo, feliz fin de semana";
		}else{
			echo "No es fin de semana, a estudiar";
		}
	 ?>

	
</body>
</html>