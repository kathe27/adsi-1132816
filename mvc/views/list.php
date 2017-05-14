<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios (Modelo Vista Controlador)</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="text-center">Bienvenidos (MVC)</h1>
				<hr>
				<h3 class="lead">Datos de Usuario (Arreglo)</h3>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Documento</th>
							<th>Nombre</th>
							<th>Teléfono</th>
							<th>Dirección</th>
							<th>Ciudad</th>
							<th>Correo</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data as $d): ?>
							<tr>
								<td><?php echo $d['documento']; ?></td>
								<td><?php echo $d['nombres']; ?></td>
								<td><?php echo $d['telefono']; ?></td>
								<td><?php echo $d['direccion']; ?></td>
								<td><?php echo $d['ciudad']; ?></td>
								<td><?php echo $d['correo']; ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<a href="./" class="btn btn-info"><i class="glyphicon glyphicon-arrow-left"></i>Regresar</a>
			</div>
		</div>
	</div>
	
</body>
</html>