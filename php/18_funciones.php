<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
</head>
<body>
	<h1>Funciones</h1>
	<hr>

	<?php 

		// FUNCION SIN PARAMETROS
		function saludo(){
			echo "<h2 f>Hola Mundo ADSI</h2>";
		}

		saludo(); //ERROR

		//Funcion con parametros
		function bienvenida($nombre, $titulacion){
			echo "Bienvenido: ".$nombre;
			echo "<br>";
			echo "Titulación: ".$titulacion;
		} 
		bienvenida('Katherine','Analisis y Desarrollo de SI');

		//Funcion retorna valor
		function tiempoformacion($tiempo){
			return $tiempo."Meses";
		}
		echo "<br>";
		echo "Su tiempo de formación es: ".tiempoformacion(6);

		//Funcion con parametros opcionales
		function centroformacion($centro,$regional = 'Caldas'){
			return "Centro de Formación: ".$centro."<br> Regional: ".$regional;
		}
		echo "<br>".centroformacion('Comercio y Servicios');

	 ?>
</body>
</html>