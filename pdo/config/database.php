<?php 
	// Conectar Base de Datos

		try{
			$con = new PDO("mysql:host=$host;dbname=$ndb",$user,$pass);
			$con->exec('set names utf8');
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
					AND clave = :clave";
			$stm = $con->prepare($sql);
			$stm->bindparam(':correo', $correo);
			$stm->bindparam(':clave', $clave);
			$stm->execute();

			if ($stm->rowCount() > 0) {
				$urow = $stm->fetch(PDO::FETCH_ASSOC);
				$_SESSION['uid'] 	  = $urow['id'];
				$_SESSION['unombres'] = $urow['nombres'];
				$_SESSION['urol'] 	  = $urow['rol'];
				return true;
			}else{
				return false;
			}

		}catch(PDOEXECPTION $e){
			echo $e->getMessage();
		}
		
	}

	//Obtener todos los articulos
	function showArticles($con){
		try {
			$stm = $con->prepare("SELECT * FROM articulos");
			$stm->execute();
			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
			
	}
	function idclient($con){
		try {
			$stm = $con->prepare("SELECT * FROM usuarios");
			$stm->execute();
			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
			
	}
	//Guardar Articulo
	function saveArticle($con, $nombre, $precio, $imagen = 'default') {
		try {
			if($imagen == 'default'){
				$sql = "INSERT INTO articulos VALUES(DEFAULT, :nombre, :precio, DEFAULT)";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
			}else{
				$sql = "INSERT INTO articulos VALUES(DEFAULT, :nombre, :precio, :imagen)";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':imagen', $imagen);
			
			if($stm->execute()) {
				$_SESSION['message_action'] = 'El Articulo se Adicionó con Exito!';
				echo "<script>window.location.replace('./');</script>";
			}else{
				$_SESSION['message_action'] = 'El Articulo no se Adicionó';

				echo "<script>window.location.replace('./');</script>";	
			}
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}		
	}
	//Consultar un Articulo
	function showArticle($con, $id){
		try {
			$stm = $con->prepare("SELECT * FROM articulos WHERE id = :id ");
			$stm->bindparam(':id', $id);
			$stm->execute();
			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	//Modificar Articulo
	function updateArticle($con, $id, $nombre, $precio, $imagen = 'default') {
		try {
			if($imagen == 'default'){
				$sql = "UPDATE articulos SET nombre =  :nombre, precio = :precio WHERE id = :id";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':id', $id);

			}else{
				$sql = "UPDATE articulos SET nombre =  :nombre, precio = :precio, imagen = :imagen WHERE id = :id";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':imagen', $imagen);
				$stm->bindparam(':id', $id);

			
			if($stm->execute()) {
				$_SESSION['message_action'] = 'El articulo se modifico con exito';
				echo "<script>window.location.replace('./');</script>";
			}else{
				$_SESSION['message_action'] = 'El articulo no se modifico';
				echo "<script>window.location.replace('./');</script>";
			}
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}			
	}

	//Eliminar Artiuclo
	function deleteArticle($con, $id){
		try {
			$stm = $con->prepare("DELETE FROM articulos WHERE id = :id ");
			$stm->bindparam(':id', $id);
			if($stm->execute()){
				$_SESSION['message_action'] = 'El articulo se Eliminó con Exito!';
				echo "<script>window.location.replace('./');</script>";
			}

		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}
	function shopArticle($con,$id_u,$id){
		try {
			$sql = "INSERT INTO compras VALUES(DEFAULT, :id_u, :id)";
			$stm = $con->prepare($sql);
			$stm->bindparam(':id_u', $id_u);
			$stm->bindparam(':id', $id);

			if($stm->execute()){
				$_SESSION['message_action'] = 'El articulo se compro con Exito!';
				echo "<script>window.location.replace('../');</script>";
			}

		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	function ShoppingCart($con, $id){
		try {
			$stm = $con->prepare("SELECT * FROM compras WHERE id = :id ");
			$stm->bindparam(':id', $id);
			$stm->execute();
			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}
	function myShopping($con, $id_u){
		try {
			$stm = $con->prepare("SELECT articulos.nombre, articulos.precio, usuarios.id, compras.cliente_id FROM articulos, usuarios, compras  WHERE compras.cliente_id = :id_u GROUP BY articulos.nombre ");
			$stm->bindparam(':id_u', $id_u);
			$stm->execute();
			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	function showSales($con){
		try {
			$stm = $con->prepare("SELECT DISTINCT articulos.nombre, articulos.precio, usuarios.id, usuarios.nombres, compras.cliente_id, compras.id FROM articulos, usuarios, compras WHERE usuarios.id = compras.cliente_id AND articulos.id = compras.articulo_id");
			$stm->execute();
			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
?>