<?php 
	class Persona{
		public  $documento;
		private $nombre;
		private $edad;

		public function __construct($doc,$nom,$eda) {
			$this->documento 	= $doc;
			$this->nombre 		= $nom;
			$this->edad 		= $eda;
		}
		public function getData() {
			echo "Documento: ".$this->getDocumento();
			echo "<br>";
			echo "Nombre: ".$this->getNombre();
			echo "<br>";
			echo "Edad: ".$this->getEdad();
		}

		private function getDocumento() {
			return $this->documento;
		}
		private function getNombre(){
			return $this->nombre;
		}
		private function getEdad(){
			return $this->edad;
		}
	}

	$per = new Persona(1053864555, 'Jeremias Springfield', 45);
	$per->getData();
	// echo $per->documento; // Correcto porque es publico
	// echo $per->nombre; // Incorrecto porque es privado

 ?>