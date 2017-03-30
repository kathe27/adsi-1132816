<?php 
	// Conectar Base de Datos

		try{
			$con = new PDO("mysql:$host=$host;dbname=$ndb",$user,$pass);
			$con->exec('set names utf8');
			//echo "Se ha conectado a la base de datos";
		}catch (Exception $e){
			echo $e->getMessage();

		}

	// Login
	function login($con, $correo, $clave){
		try{
			$sql = "SELECT * 
					FROM usuarios
					WHERE correo = :correo
					AND clave = :clave
					LIMIT 1";
			$stm = $con->prepare($sql);
			$stm->bindparam(':correo', $correo);
			$stm->bindparam(':clave', $clave);
			$stm->execute();

			if ($stm->rowCount() > 0) {
				$urow = $stm->fetch(PDO::FETCH_ASSOC);
				$_SESSION['uid'] 	  = $urow['id'];
				$_SESSION['unombres'] = $urow['nombres'];
				$_SESSION['urol'] 	  = $urow['rol'];

				//var_dump($urow);
				return true;
			}else{
				return false;
			}

		}catch(PDOEXECPTION $e){
			echo $e->getMessage();
		}
		
	}

 ?>