<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fechas (date)</title>
</head>
<body>
	<h1>Fechas (date) <?php echo date('Y-m-d'); ?></h1>
	<hr>

	<p>Mi fecha de nacimiento: <?php echo date('Y-m-d', mktime(0,0,0,01,27,1999)); ?></p>

	<?php 
		$manana = mktime(0,0,0,date('m'), date('d')+1, date('Y'));
		echo "Mañana es: ".date('Y-m-d', $manana);
	 ?>

	
</body>
</html>