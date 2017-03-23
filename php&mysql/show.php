<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD - PHP & MYSQL</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="public/css/custom.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1 class="text-center">Consultar Avatar</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Consultar Avatar</li>
				</ol>
				
				<?php if (isset($_GET['id'])): ?>
					<?php 
						include 'includes/db.php';
						$id  = $_GET['id'];
						$sql = "SELECT * FROM avatars WHERE id =$id"; 
						$rs  = mysqli_query($con, $sql);
						while ($row = mysqli_fetch_array($rs)) {
					?>
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title text-uppercase text-center"><?=$row['name']?></h3>
					  </div>
					  <div class="panel-body">
				    	<table class="table text-center">
				    		<tr>
				    			<td><img src="<?=$row['image']?>"></td>
				    		</tr>
				    		<tr>
				    			<td><?=$row['gender']?></td>
				    		</tr>
				    		<tr>
				    			<td style="background-color: <?=$row['color']?>; color: #fff; text-shadow: 1px 0px 4px #000 "> <?=$row['color']?></td>
				    		</tr>
				   		</table>
				 	 </div>
				</div>

				
				<?php 
					include 'includes/db.php';
					}
					mysqli_close($con);
				 ?>
				<?php endif ?>
			</div>
		</div>
	</div>

	<script src="public/js/jquery-3.1.1.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
</body>
</html>