<?php 
	class Materia{
		private $nombre;
		private $profesor;
		private $aula;

		public function __construct($nombre, $profesor, $aula){
			$this->nombre = $nombre;
			$this->profesor = $profesor;
			$this->aula = $aula;
		}
		public function getMateria(){
			echo "<li>Profesor: ".$this->profesor."</li>";
			echo "<li>Aula: ".$this->aula."</li>";
		}
		public function __clone(){
			echo "<li>Nombre: ".$this->nombre."</li>";
		}
	}
	$mt = new Materia('Ingles','Alexandra','Sistemas I');
	$ob = clone($mt);
	$ob->getMateria();
 ?>