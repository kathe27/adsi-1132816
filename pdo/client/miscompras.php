 

<?php 
	require '../config/app.php';
	require '../config/database.php';
	require '../config/security_client.php';
	include '../templates/header.inc';
	include '../templates/navbar.inc';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h4 class="text-uppercase">Estas son tus compras <?=$_SESSION['unombres']?></h4>
			<?php $id_u = NULL; ?>
			<?php $id_u = $_SESSION['uid']; ?>
			<hr>
			<?php $arts = myShopping($con, $id_u); ?>	
			 <?php foreach ($arts as $a): ?>
			  		<table class="table table-hover text-right">
			  			<tr>
			  				<th>Articulo:</th>
			  				<td><?=$a['nombre']?></td>
			  			</tr>
			  			<tr>
			  				<th>Precio:</th>
			  				<td>$<?=number_format($a['precio'])?></td>
			  			</tr>

			  		</table>
			  <?php endforeach ?> 
			
		</div>
	</div>
</div>

<?php 
	include '../templates/footer.inc';
 ?>