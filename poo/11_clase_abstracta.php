<?php 
	//Clase Abstracta
	abstract class BaseDatos{
		protected $conx;
		protected $host;
		protected $user;
		protected $pass;
		protected $nmbd;

		public function __construct($h, $u, $p, $b){
			$this->host = $h;
			$this->user = $u;
			$this->pass = $p;
			$this->nmbd = $b;
		}

		public function conexion(){
			$this->conx = new mysqli($this->host, $this->user, $this->pass, $this->nmbd);
			if ($this->conx) {
				echo "<li>Se ha conectado a la BD con exito!</li>";
			}
		}

		public function desconexion(){
			mysqli_close($this->conx);
			echo "<li>Se ha desconectado de la BD con exito!";
		}
	}
	//Clase Concreta
	class Usuario extends BaseDatos{
		public function __construct(){
			parent::conexion();
		}
	}
	//$obj = new BaseDatos; // No se puede instanciar una clase abstracta
	$user = new Usuario('localhost','root','','adsi1132816');
	$user->desconexion();
 ?>