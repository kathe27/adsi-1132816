<?php  
	class Pc{
		private $procesador;
		private $memoriaram;
		private $discoduro;

		public function __construct($pro, $mem, $dis){

			$this->procesador = $pro;
			$this->memoriaram = $mem;
			$this->discoduro = $dis;
		}

		//Método Estático
		public static function getPc(){
			return "Procesador: ".$this->procesador."Memoria Ram: ".$this->memoriaram."Disco Duro: ".$this->discoduro;
		}

		public static function getInfo($pro, $mem, $dis){
			return "Procesador: ".$pro."<br>"."Memoria Ram: ".$mem. "<br>"."Disco Duro: ".$dis;
		}
	}

	// ERROR: Los métodos estáticos no pueden reconocer los atributos de la clase
	// $pc = new Pc('Intel Pentium I7', '16 GB', '1 TB');
	// echo $pc->getPc();
	echo Pc::getInfo('ADM A8', '16 GB', '4 TB');
?>