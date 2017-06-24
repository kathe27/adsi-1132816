<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Artículos</title>
	<style>
		body{
			font-family: sans-serif;
			color: #666;
		}
		table{
			border: thin solid #ccc;
			border-collapse: collapse;
		}
		table td, table th{
			font-size: 14px;
			border: thin solid #ccc;
			color: #888;
			padding: 4px;
		}
		table th{
			background-color: #ddd;
			color: #666;
			text-align: center;
		}
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Lista de Artículos</h1>
	<hr>
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Categoría</th>
					<th>Descripción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $art)
				<tr>
					<td>{{ $art->name}}</td>
					<td>{{ $art->category->name}}</td>
					<td>{{ $art->content}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>

