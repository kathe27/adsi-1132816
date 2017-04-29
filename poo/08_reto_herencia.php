<?php
	class OperacionAritmetica {
		protected $n1;
		protected $n2;
		protected $rs;
		public function __construct($n1, $n2) {
			$this->n1 = $n1;
			$this->n2 = $n2;
		}
		public function getOperacion() {
			return $this->rs;
		}
	}
	class Suma extends OperacionAritmetica {
		public function calcular() {
			$this->rs = $this->n1 + $this->n2;
		}
	}
	class Resta extends OperacionAritmetica {
		public function calcular() {
			$this->rs = $this->n1 - $this->n2;
		}
	}
	class Producto extends OperacionAritmetica {
		public function calcular() {
			$this->rs = $this->n1 * $this->n2;
		}
	}
	class Division extends OperacionAritmetica {
		public function calcular() {
			$this->rs = $this->n1 / $this->n2;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Herencia (Operaciones Aritméticas)</title>
</head>
<body>
	<h1>Herencia (Operaciones Aritméticas)</h1>
	<hr>
	<form action="" method="post">
		<select name="op">
			<option value="">Seleccione...</option>
			<option value="1">Suma</option>
			<option value="2">Resta</option>
			<option value="3">Producto</option>
			<option value="4">División</option>
		</select>
		<br>
		<input type="number" name="n1" placeholder="Número 1">
		<br>
		<input type="number" name="n2" placeholder="Número 2">
		<br>
		<input type="submit" value="Calcular">
	</form>
	<br>
	<h4>
		<?php 
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$op = $_POST['op'];
				$n1 = $_POST['n1'];
				$n2 = $_POST['n2'];
				if($op == '1') {
					$opr = new Suma($n1, $n2);
					$opr->calcular();
					echo "La Suma es igual a ".$opr->getOperacion();
				}
				if($op == '2') {
					$op = new Resta($n1, $n2);
					$op->calcular();
					echo "La Resta es igual a ".$op->getOperacion();
				}
				if($op == '3') {
					$op = new Producto($n1, $n2);
					$op->calcular();
					echo "La Producto es igual a ".$op->getOperacion();
				}
				if($op == '4') {
					$op = new Division($n1, $n2);
					$op->calcular();
					echo "La División es igual a ".$op->getOperacion();
				}
			}
		 ?>
	</h4>
</body>
</html>