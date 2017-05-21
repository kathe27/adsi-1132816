<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios desde la BD (MVC)</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">

</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1 class="text-center">Lista de Uusaruis desde la BD (MVC)</h1>
					<hr>
					<h3 class="lead">Datos de Usuario(BD)</h3>
					<a class="btn btn-success" href="?q=add">Añadir<i class="glyphicon glyphicon-plus"></i></a>
					
					<table class="table table-stripped table-hover">
						<thead>
							<tr>
								<th>Documento</th>
								<th>Nombre</th>
								<th>Telefono</th>
								<th>Direccion</th>
								<th>Ciudad</th>
								<th>Correo</th>
								<th>Acciones</th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $d): ?>
								<tr>
									
									<td><?php echo $d ['documento']; ?></td>
									<td><?php echo $d ['nombres']; ?></td>
									<td><?php echo $d ['telefono']; ?></td>
									<td><?php echo $d ['direccion']; ?></td>
									<td><?php echo $d ['ciudad']; ?></td>
									<td><?php echo $d ['correo']; ?></td>
									 <td>
	                					<a class="btn btn-info" href="?q=edit&id=<?php echo $d['id']; ?>"><i class="glyphicon glyphicon-pencil"></i></a>
	                					<a class="btn btn-danger" href="?q=delete&id=<?php echo $d['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>


	         				     	</td>
								</tr>


							<?php endforeach ?>
						</tbody>
					</table>
					<a href="./" class="btn btn-info"> <i class="glyphicon glyphicon-arrow-left" >Regresar</i></a>
					
						
			</div>
		</div>
	</div>
	
</body>
</html>