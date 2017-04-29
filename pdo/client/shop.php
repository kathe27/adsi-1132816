<?php 
	require '../config/app.php';
	require '../config/database.php';
	require '../config/security_client.php';
	if($_GET){
		$id_u = $_SESSION['uid'];
		$id 	= $_GET['id'];	
		$id 	= shopArticle($con,$id_u,$id);
	}else{
		echo "<h5 class='text-muted'>No se puede relizar la compra</h5>";
	}
 ?>