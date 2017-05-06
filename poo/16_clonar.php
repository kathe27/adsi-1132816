<?php 
	class Fruta{
		protected $nombre;
		protected $color;
		protected $clima;

		public function __construct($nombre, $color, $clima){
			$this->nombre = $nombre;
			$this->color = $color;
			$this->clima = $clima;
		}
		public function getInformacion(){
			return $this->nombre . ' ' . $this->color . ' ' . $this->clima;
		}
	}
	$fr = new Fruta('manzana', 'rojo','frio');
	$ds = clone($fr);
	echo $ds->getInformacion();
?>