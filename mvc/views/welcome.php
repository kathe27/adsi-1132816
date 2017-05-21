<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">

</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="text-center">Bienvenidos (MVC)</h1>
					<hr>
					<h3 class="lead">Datos de Usuario(Arreglo)</h3>
					
					<table class="table table-striped">
						<tr>
							<th>Nombre:</th>
							<td><?php echo $data['nombre']; ?></td>
						</tr>

						<tr>
							<th>Apellido:</th>
							<td><?php echo $data['apellido']; ?></td>
						</tr>

						<tr>
							<th>Edad:</th>
							<td><?php echo $data['edad']; ?></td>
						</tr>

						


					</table>

						<a href="?q=select" class="btn btn-info"><i class="glyphicon glyphicon-user" ></i>Ver Registros BD</a>
						
			</div>
		</div>
	</div>
	
</body>
</html>