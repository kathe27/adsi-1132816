
<?php 
	require '../../config/app.php';
	require '../../config/database.php';
	require '../../config/security_admin.php';
	include '../../templates/header.inc';
	include '../../templates/navbar.inc';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h4 class="text-uppercase">Ventas</h4>
			<hr>
			<?php $arts = showSales($con); ?>
			<?php foreach ($arts as $art): ?>
				<table class="table text-right">
					<tr>
						<th>Cliente:</th>
						<td><?=$art['nombres'];?></td>	
					</tr>
					<tr>
						<th>Articulo:</th>	
						<td><?=$art['nombre'];?></td>
					</tr>
					
				</table>
			<?php endforeach ?>
		</div>
	</div>
</div>


<?php 
	include '../../templates/footer.inc';
 ?>