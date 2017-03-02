<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matrices</title>
</head>
<body>
	<h1>Matrices</h1>
	<hr>

	<?php 
		//La forma larga (Incorrecta)
		$vh1 = "Volkswagen";
		$vh2 = "Renault";
		$vh3 = "Chevrolet";
		$vh4 = "Mazda";
		$vh5 = "Ford";

		//Numéricos
		//La forma corta (Correcta)
		$vehiculos = array('Volkswagen','Renault','Chevrolet','Mazda','Ford');

		//Indices Manuales
		$vehiculos[5] = 'Kia';
		$vehiculos[6] = 'Fiat';
		$vehiculos[7] = 'Toyota';
		$vehiculos[8] = 'Hyundai';

		//Imprimir Arreglos sin ciclos
		echo "<h3>Numéricos</h3>"; 
		var_dump($vehiculos);

		echo "<br><br> Mi vehiculo favorito es: ".$vehiculos['0'];

		//Matrices Asociativas
		$referencias = array('Volkswagen' => 'Golf',
							 'Renault'    => 'Duster',
							 'Chevrolest' => 'Traker',
							 'Mazda'      => 'CX6',
							 'Ford'       => 'Fusion' 
							 ); 

		$referencias['Kia']	    = 'Picanto';
		$referencias['Fiat']    = 'Palio';
		$referencias['Toyota']  = 'Prado';
		$referencias['Hyunday'] = 'i30';

		echo "<h3>Asociativos</h3>";
		var_dump($referencias);

		echo "<br><br> Mi referencia de vehículo favorito es: ".$referencias['Ford'];

		//Matrices Multidimencionales
		$familias = array( 
					"Happy tree friends"=> array(
						"Flaki",
						"Lumpy",
						"Nutty",
						"pop"),
					"South park"=> array(
						"Eric",
						"Kenny",
						"Kyle",
						"Stan")
					);
		echo "<h3>Multidimencionales</h3>";
		var_dump($familias);

		echo "<br><br> Mi personaje favorito de la familia Happy tree friends es: ".$familias['Happy tree friends'][3];
	 ?>

	
</body>
</html>