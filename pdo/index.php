<?php 
	require 'config/app.php';
	require 'config/database.php';
	require 'config/redirect.php';
	include 'templates/header.inc';
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center">Sistema Ventas (PDO & MYSQL)</h1>
			<hr>
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title">Ingreso de Usuario</h3>
			  </div>
			  <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-8 col-md-offset-2">
			  	<?php 
			  		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			  			$correo = $_POST['correo'];
			  			$clave  = md5($_POST['clave']);
					if(login($con, $correo, $clave)) {
						if($_SESSION['urol'] == 'administrador'){
							echo "<script>
									window.location.replace('administrador.php');
								</script>";

						}else if ($_SESSION['urol'] == 'cliente') {
							echo "<script>
									window.location.replace('cliente.php');
								</script>";
						}

					}else {
						echo "<div class='alert alert-primary alert-dismissible '>
							  <button type='button' class='close' data-dismiss='alert'
							  ><span>&times;</span></button><strong>Datos Incorrectos!</strong></div>";
					}
					$con = null;

					}
				?>
			  		<form action="" method="post">
			    	<div class="form-group">
			    		<input type="text" 
			    			   class="form-control" 
			    			   name="correo"
			    			   placeholder="Correo Electronico">
			    	</div>
			    	<div class="form-group">
			    		<input type="password" 
			    			   class="form-control" 
			    			   name="clave"
			    			   placeholder="Contraseña">
			    	</div>
			    	<div class="form-group">
			    		<input type="submit" 
			    			   class="btn btn-primary" 
			    			   value="Ingresar">
			    	</div>
			    	</form>
			  	    </div>
			      </div>
			   </div>
			</div>
		</div>
	</div>
</div>

<?php 
	include 'templates/footer.inc';
?>