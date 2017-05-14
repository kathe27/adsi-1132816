<?php 
	// Clase Abstracta
	abstract class Database {
		protected $conx;
		protected $host;
		protected $user;
		protected $pass;
		protected $nmbd;

		public function __construct($h, $u, $p, $b) {
			$this->host = $h;
			$this->user = $u;
			$this->pass = $p;
			$this->nmbd = $b;

			$this->connect();
		}

		public function connect() {
			$this->conx = new mysqli($this->host, $this->user, $this->pass, $this->nmbd);
		}
		public function disconnect() {
			mysqli_close($this->conx);
		}
	}
	class Model extends Database {
		public function __construct() {
			parent::__construct('localhost', 'root', '', 'adsi1132816');
			parent::connect();
		}


		public function getArray() {
			return array('nombre'   => 'Jeremias',
						 'apellido' => 'Springfield',
						 'edad'     => 44);
		}
		public function getUsers() {
			return $this->conx->query("SELECT * FROM usuarios");
		}
	}