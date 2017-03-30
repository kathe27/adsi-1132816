<?php 
	require 'config/app.php';
	require 'config/database.php';
	require 'config/security_admin.php';
	include 'templates/header.inc';
	include 'templates/navbar.inc';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Bienvenid@ <?=$_SESSION['unombres'];?></h2>
			<hr>
		</div>
	</div>
</div>
<?php 
	include 'templates/footer.inc';
 ?>