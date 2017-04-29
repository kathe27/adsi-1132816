<?php 
	class Table{
		public $nf;
		public $nc;

		public function __construct($nf, $nc){
			$this->nf = $nf;
			$this->nc = $nc;
		}

		public function drawTable(){
			echo "<table border='1'>";
			for($f=1; $f <= $this->nf; $f++){
				$this->drawRowStart();
				for($c=1; $c <= $this->nc; $c++){
					$this->drawCells($f, $c);
				}
				$this->drawRowEnd();
			}
			echo "</table>";
		}

		public function drawRowStart(){
		}
		public function drawCells(){
			echo "<td>x</td>";
		}
		public function drawRowEnd(){
			echo "</tr>";
		}
	}

	$tb = new Table(8,6);
	$tb->drawTable();
 ?>