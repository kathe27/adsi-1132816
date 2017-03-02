<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Asignacion PHP</title>
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
	<h1>Operadores Asignacion PHP</h1>
	<hr>
	<table>
		<tr>
			<th>Operador</th>
			<th>Ejemplo</th>
			<th>Igual que</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<?php 
				$y = 2;
				$x = $y;
			 ?>
			<td>=</td>
			<td>x = y</td>
			<td>x = y</td>
			<td><?=$x?></td>
		</tr>
		<tr>
			<?php 
				$x += $y;
			 ?>
			<td>+=</td>
			<td>x += y</td>
			<td>x = x + y</td>
			<td><?=$x?></td>
		</tr>
		<tr>
			<?php 
				$x -= $y;
			 ?>
			<td>-=</td>
			<td>x -= y</td>
			<td>x = - y</td>
			<td><?=$x?></td>
		</tr>
		<tr>
			<?php 
				$x *= $y;
			 ?>
			<td>*=</td>
			<td>x *= y</td>
			<td>x = * y</td>
			<td><?=$x?></td>
		</tr>
		<tr>
			<?php 
				$x /= $y;
			 ?>
			<td>/=</td>
			<td>x /= y</td>
			<td>x = x / y</td>
			<td><?=$x?></td>
		</tr>
		<tr>
			<?php 
				$x .= $y;
			 ?>
			<td>.=</td>
			<td>x .= y</td>
			<td>x = x . y</td>
			<td><?=$x?></td>
		</tr>
		<tr>
			<?php 
				$x %= $y;
			 ?>
			<td>%=</td>
			<td>x %= y</td>
			<td>x = x % y</td>
			<td><?=$x?></td>
		</tr>
	</table>
</body>
</html>