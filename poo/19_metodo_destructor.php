<?php 
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

		public function __destruct(){
			mysqli_close($this->conx);
			echo "<li>Se ha desconectado de la BD con exito!";
		}
	}

	class Usuario extends BaseDatos{
		public function __construct(){
			parent::conexion();
		}
	}
	$user = new Usuario('localhost','root','','adsi1132816');
 ?>