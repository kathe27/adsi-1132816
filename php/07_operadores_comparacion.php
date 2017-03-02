<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Comparacion PHP</title>
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
	<h1>Operadores Comparacion PHP</h1>
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
				$y = 8;
				$x = 5;
			 ?>
			<td>==</td>
			<td>Es igual</td>
			<td>5 == 8</td>
			<td><?=var_dump(5==8)?></td>
		</tr>
		<tr>
			<?php 
				$x != $y;
			 ?>
			<td>!=</td>
			<td>No es igual</td>
			<td>5 != 8</td>
			<td><?=var_dump(5!=8)?></td>
		</tr>
		<tr>
			<?php 
				$x <> $y;
			 ?>
			<td><></td>
			<td>No es igual</td>
			<td>x <> y</td>
			<td><?=var_dump(5<>8)?></td>
		</tr>
		<tr>
			<?php 
				$x > $y;
			 ?>
			<td>></td>
			<td>Es mayor que</td>
			<td>x > y</td>
			<td><?=var_dump(5>8)?></td>
		</tr>
		<tr>
			<?php 
				$x < $y;
			 ?>
			<td><</td>
			<td>Es menor que</td>
			<td>x < y</td>
			<td><?=var_dump(5<8)?></td>
		</tr>
		<tr>
			<?php 
				$x >= $y;
			 ?>
			<td>>=</td>
			<td>Es mayor o igual que</td>
			<td>x >= y</td>
			<td><?=var_dump(5>=8)?></td>
		</tr>
		<tr>
			<?php 
				$x <= $y;
			 ?>
			<td><=</td>
			<td>Es menor o igual que</td>
			<td>x <= y</td>
			<td><?=var_dump(5<=8)?></td>
		</tr>
	</table>
</body>
</html>