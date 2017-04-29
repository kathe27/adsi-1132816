<?php 
	require 'config/app.php';
	require 'config/database.php';
	require 'config/security_client.php';
	include 'templates/header.inc';
	include 'templates/navbar.inc';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>Bienvenido <?=$_SESSION['unombres'];?></h2>
			<hr>
			<?php if (isset($_SESSION['message_action'])): ?>
					<div class="alert alert-success">
						  <div class="alert-icon">
							<i class="material-icons">check</i>
						  </div>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true"><i class="material-icons">clear</i></span>
						  </button>
					      <b>Aviso:</b> <?=$_SESSION['message_action']?>
					</div>
				<?php unset($_SESSION['message_action']) ?>
			<?php endif ?>
			<?php $arts = showArticles($con); ?>
			<div class="row">
			<?php foreach ($arts as $art): ?>
				<div class="col-md-4">
				    <div class="thumbnail text-center">                 
				      <figure style="background-image: url(<?=$base_url.$art['imagen']?>); background-position: center; background-repeat: no-repeat; background-size: contain; width: 100%; height: 180px"></figure>
				      <div class="caption">
				        <h3><?=$art['nombre']?></h3>
				        <p><?=$art['precio']?></p>
				        <p>
				        	<a href="#" class="btn btn-primary btn-shop" data-action="<?=$art['id']?>" role="button"><i class="material-icons">shopping_cart</i></a>
				        </p>
				      </div>
				    </div>
				    </div>
			<?php endforeach ?>
			</div>

		</div>
	</div>
</div>

<?php 
	include 'templates/footer.inc';
 ?>