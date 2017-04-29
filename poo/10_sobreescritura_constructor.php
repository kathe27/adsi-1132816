<?php 
	
	echo "<strong> Ejemplo #1 </strong>";
	class Mesa{
		protected $color;
		protected $material;

		public function __construct($col, $mat){
			$this->color    = $col;
			$this->material = $mat;
		}

		public function getMesa(){
			echo "<li>Color: ".$this->color."</li>";
			echo "<li>Material: ".$this->material."</li>";
		}
	}

	class Mesita extends Mesa{
		public function __construct(){
			parent::__construct('Negro', 'Madera');
		}
	}

	$vm = new Mesita('Cafe', 'Metal');
	$vm->getMesa();

	print "<br>";
 ?>


 <?php 

	echo "<strong> Ejemplo #2 </strong>";
 	class Consola{
		protected $modelo;
		protected $nombre;
		protected $almacenamiento;

		public function __construct($mod, $nom, $alm){
			$this->modelo = $mod;
			$this->nombre = $nom;
			$this->almacenamiento = $alm;
		}

	public function getConsola(){
		echo "<li> Modelo: ".$this->modelo."</li>";
		echo "<li> Nombre: ".$this->nombre."</li>";
		echo "<li> Almacenamiento: ".$this->almacenamiento."</li>";

		}
	}

	class Nintendo extends Consola{
		public function __construct(){
			parent::__construct(1990,'Super Nintendo', '16M');
		}
	}

	$cn = new Nintendo(2017, 'Nintendo Swicth', '32GB');
	$cn ->getConsola();
  ?>