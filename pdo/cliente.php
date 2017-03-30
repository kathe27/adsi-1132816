<?php 
	require 'config/app.php';
	require 'config/database.php';
	require 'config/security_cliente.php';
	include 'templates/header.inc';
	include 'templates/navbar.inc';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Bienvenid@ <?=$_SESSION['unombres'];?></h2>
			<hr>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, eligendi ipsum, aspernatur deleniti consequatur voluptatibus exercitationem incidunt a perferendis laudantium impedit pariatur asperiores, sit fugit quam non quia distinctio voluptates!
			</p>
		</div>
	</div>
</div>
<?php 
	include 'templates/footer.inc';
 ?>