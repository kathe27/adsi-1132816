<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Aritmeticos PHP</title>
	<style>
		body{
			font-family: Arial;
		}
		table{
			border-collapse: collapse;
		}
		table td, table th{
			background-color: #ddd;
			border: 1px solid #ccc;
			color: #666;
			padding: 10px;
		}
		table th{
			background-color: #999;
			color: #fff;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>Operadores Aritmeticos PHP</h1>
	<hr>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripcion</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<?php 
				$x = 2;
				$suma = $x+2;
			 ?>
			<td>+</td>
			<td>Adicion</td>
			<td>x=2 ; x=2</td>
			<td><?=$suma?></td>
		</tr>
		<tr>
			<?php 
				$resta = 5 - $x;
			 ?>
			<td>-</td>
			<td>Substraccion</td>
			<td>x=2 ; 5-x</td>
			<td><?=$resta?></td>
		</tr>
		<tr>
			<?php 
				$x = 4;
				$multiplicacion = $x * 5;
			 ?>
			<td>*</td>
			<td>Producto</td>
			<td>x=4 ; x*4</td>
			<td><?=$multiplicacion?></td>
		</tr>
		<tr>
			<?php 
				$x = 5;
				$division = 15 / $x;
			 ?>
			<td>/</td>
			<td>Division</td>
			<td>x = 5 ; 15</td>
			<td><?=$division?></td>
		</tr>
		<tr>
			<?php 
				$residuo = $x % 2;
			 ?>
			<td>%</td>
			<td>Residuo</td>
			<td>x = 5; x % 2</td>
			<td><?=$residuo?></td>
		</tr>
		<tr>
			<?php 
				$incremento = $x++;
			 ?>
			<td>++</td>
			<td>Incremento</td>
			<td>x = 5; x++</td>
			<td><?=$incremento?></td>
		</tr>
		<tr>
			<?php 
				$x = 5;
				$decremento = $x--;
			 ?>
			<td>--</td>
			<td>Decremento</td>
			<td>x = 5; --x</td>
			<td><?=$decremento?></td>
		</tr>
	</table>
</body>
</html>