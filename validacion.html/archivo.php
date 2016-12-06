<?php 
	$con = mysqli_connect("localhost","root","","formulario3");

	if(mysqli_connect_errno()){
		echo "No se pudo conectar a la base de datos". mysqli_connect_error();
	}
	$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
	$correo = mysqli_real_escape_string($con, $_POST["correo"]);

	$sql= "INSERT INTO tabla (Nombre,Correo) VALUES ('$nombre', '$correo')";

	if(!mysqli_query($con,$sql)){
		die('Error:'. mysqli_error($con));
	}else{
		echo"Conexión realizada con exito";
	}
 ?>