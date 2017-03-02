<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadenas PHP</title>
</head>
<body>
	<h1>Cadenas PHP</h1>
	<hr>

	<?php 
		$cadena1 = 'ADSI 1132816';
		$cadena2 = "Hola Mundo $cadena1";

		//Concatenar
		$cadena3 = 'Centro de Procesos Industriales';
		$cadena4 = 'SENA Regional Caldas';
		$cadenar1 = $cadena3.' '.$cadena4;
	?>
	<h2><?=$cadena2?></h2>
	<hr>
	<h3>La cadena: <?=$cadenar1?> Tiene: <?=strlen($cadenar1)?> Caracteres</h3>
	<h4>La palabra Procesos en la cadena <?=$cadenar1?> Esta en la posicion: <?= strpos($cadenar1, 'Procesos')?></h4>

</body>
</html>