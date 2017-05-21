<?php  

abstract class DataBase {
 		protected $conx;
 		protected $host;
 		protected $user;
 		protected $pass;
 		protected $nmbd;
 	

 	public function __construct($h,$u,$p,$b) {
 		$this->host = $h;
 		$this->user = $u;
 		$this->pass = $p;
 		$this->nmbd = $b;

 		$this->connect();
 	}

 	public function connect() {
 		$this->conx = new mysqli($this->host, $this->user, $this->pass, $this->nmbd);
 		if ($this->conx) {
 		}
 	}

 	public function disconnect(){
 		mysqli_close($this->conx);
 	}
 }

	class Model extends DataBase{

 		public function __construct(){
 		parent::__construct('localhost', 'root', '', 'adsi1132816');
 		parent::connect();
 	}
 
		public function getArray(){
			return array('nombre' => 'Jeremias' , 'apellido' => 'Springfield', 'edad' => 44);
		}
		public function getUsers(){
			return $this->conx->query("SELECT * FROM usuarios");
		}

		public function editUsersco($id){
			return $this->conx->query("SELECT * FROM usuarios WHERE id = '$id'");
		}

		public function ActUsersco($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $id){
			return $this->conx->query("UPDATE usuarios SET documento = '$documento', nombres = '$nombres', telefono = '$telefono', direccion = '$direccion', ciudad = '$ciudad', correo = '$correo'  WHERE id = '$id'");
		}
		public function addUsersPco($documento,$nombres,$telefono,$direccion,$ciudad,$correo){
			return $this->conx->query("INSERT INTO usuarios(documento,nombres,telefono,direccion,ciudad,correo,clave,rol) VALUES('$documento','$nombres','$telefono','$direccion','$ciudad','$correo','cliente','cliente')");

		}
		public function deleUser($id){
			return $this->conx->query("DELETE FROM usuarios WHERE id = $id");
		}
	}