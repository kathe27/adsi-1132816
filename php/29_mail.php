<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enviar Correo Electronico</title>
</head>
<body>
	<h1>Enviar Correo Electronico</h1>
	<hr>
	<form action="mail.php" method="post">
		<strong>Correo:</strong><input type="text" name="email"><br>
		<strong>Asunto:</strong><input type="text" name="asunto"><br>
		<strong>Mensaje:</strong><textarea name="mensaje"></textarea><br>
		<input type="submit" value="Enviar">
	</form>
	<?php 
		if($_POST){
			$email = $_POST["email"];
			$asunto = $_POST["asunto"];
			$mensaje = $_POST["mensaje"];

			mail("gallegocardenasd@gmail.com", "Asunto: $asunto", $mensaje, "De: $email");
			echo "Gracias; El Correo Fue Enviado Exisosamente!!!";
		}
	 ?>
</body>
</html>