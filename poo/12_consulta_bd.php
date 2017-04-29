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
			}
		}

		public function desconexion(){
			mysqli_close($this->conx);
		}
	}
	//Clase Concreta
	class Usuario extends BaseDatos{
		public function __construct($h, $u, $p, $b){
			parent::__construct($h, $u, $p, $b);
			parent::conexion();
		}
	
	public function getUsuario(){
		return $this->conx->query('SELECT * FROM usuarios');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta a BD (Programación Orientada a Objetos)</title>
</head>
<body>
	<h1>Usuarios</h1>
	<ul>
		<?php 
			$usr = new Usuario('localhost','root','','adsi1132816');
			$usuarios = $usr->getUsuario();
		 ?>
		 <?php foreach($usuarios as $usuario): ?>
		 	<li><?php echo $usuario['nombres']; ?></li>
		 <?php endforeach ?>
		 <?php 
		 	$usr->desconexion();
		  ?>
	</ul>
	
</body>
</html>