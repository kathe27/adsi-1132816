<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD - PHP & MYSQL</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css">

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="text-center">Adicionar Avatar</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Adicionar Avatar</li>
				</ol>
				<form action="" method="post">
					<div class="form-group">
						<input type="text" 
							   class="form-control" 
							   name="name"
							   placeholder="Nombre">
					</div>
					<div class="form-group">
						<select name="gender" class="form-control">
							<option value="">Genero...</option>
							<option value="Femenino">Femenino</option>
							<option value="Masculino">Masculino</option>
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-default btn-upload">
							<i class="glyphicon glyphicon-user"></i>
							Cargar Foto
						</button>
						<input type="file" id="upload" name="image" accept="image/*">
					</div>
					<div class="form-group">
						<input type="color" name="color" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">
						<i class="glyphicon glyphicon-plus"></i>
						Adicionar
						<button type="reset" class="btn btn-default">
						<i class="glyphicon glyphicon-trash"></i>
						Limpiar
					</div>
				</form>
		
				<?php 
					include 'includes/db.php';
				 ?>
			</div>
		</div>
	</div>

	<script src="public/js/jquery-3.1.1.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#upload').hide();
			$('.btn-upload').click(function(){
				$('#upload').click();
			});
		});
	</script>

</body>
</html>