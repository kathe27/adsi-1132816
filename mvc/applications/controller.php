<?php 
	class Controller {
		public $load;
		public $model;

		public function __construct() {
			$this->load = new Load();
			$this->model = new Model();

			if ($_GET) {
				if($_GET['q'] == 'select') {
					$this->showUsers();
				}
			} else {
				$this->welcome();
			}
		}
		public function welcome() {
			$dataArray = $this->model->getArray();
			$this->load->view('welcome.php', $dataArray);
		}

		public function showUsers() {
			$dataUsers = $this->model->getUsers();
			$this->load->view('list.php', $dataUsers);
		}
	}