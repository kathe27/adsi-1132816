<?php 
	require '../../config/app.php';
	require '../../config/database.php';
	require '../../config/security_admin.php';
	if($_GET){
		$id = $_GET['id'];
		$id = deleteArticle($con, $id);
	}else{
		echo "<h5 class='text-muted'>No se puede relizar la consulta</h5>";
	}
 ?>