<?php 
	class Vehiculo{
		protected $marca;
		protected $referencia;

		public function __construct($mar, $ref){
			$this->marca      = $mar;
			$this->referencia = $ref;
		}

		public function getVehiculo(){
			echo "<li> <strong>referencia:</strong> ".$this->referencia."</li>";
		}
	}

	class Mini extends Vehiculo{
		public function getVehiculo(){
			echo "<li> <strong>Marca:</strong> ".$this->marca."</li>";
			parent::getVehiculo();
		}
	}

	$vh = new Mini('Mini', 'Cooper S');
	$vh->getVehiculo();
	
	print "<br>";

	$vh = new Mini('Mini', 'Chilli Pepper');
	$vh->getVehiculo();
 ?>