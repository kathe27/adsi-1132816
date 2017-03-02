<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo (Do-While)</title>
</head>
<body>
	<h1>Ciclo (Do-While)</h1>
	<hr>

	<?php 
		//Imprimir los numeros del 0 al 100 de la
		//siguiente forma. 3, 6, 9

		$i = 0;
		do {
			echo "<br>" . $i . "<br>";
			$i += 3;
		} while ($i <= 100);

	 ?>
</body>
</html>