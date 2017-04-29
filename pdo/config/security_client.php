<?php 
	if(!isset($_SESSION['urol'])){
		echo "<script>";
		echo "alert('Acesso Denegado!');";
		echo "window.location.replace('index.php');";
		echo "</script>";
	}else{
		if($_SESSION['urol'] == 'administrador'){
				echo "<script>";
				echo "alert('Acesso Denegado');";
				echo "window.location.replace('index.php');";
				echo "</script>";
		}
	}
 ?>