<?php  

	class Controller {
		public $load;
		public $model;

		public function __construct(){
			$this->load  = new Load();
			$this->model = new Model();
			
			if ($_GET) {
				if($_GET['q'] == 'select'){
					$this->showUsers();
				}

				if($_GET['q'] == 'edit'){
					$id = $_GET['id'];
					$this->editUsers($id);
				}

				if($_GET['q'] == 'act'){
					$id = $_POST['id'];
					$documento = $_POST['documento'];
					$nombres = $_POST['nombres'];
					$telefono = $_POST['telefono'];
					$direccion = $_POST['direccion'];
					$ciudad = $_POST['ciudad'];
					$correo = $_POST['correo'];
					$this->ActUsers($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $id);

				}

				if($_GET['q'] == 'add'){
					$this->addUsers();
				}
				if($_GET['q'] == 'addForm'){
					$documento = $_POST['documento'];
					$nombres = $_POST['nombres'];
					$telefono = $_POST['telefono'];
					$direccion = $_POST['direccion'];
					$ciudad = $_POST['ciudad'];
					$correo = $_POST['correo'];
					$this->addUsersP($documento,$nombres,$telefono,$direccion,$ciudad,$correo);
				}
				if($_GET['q'] == 'delete' ){
					$id = $_GET['id'];
					$this->deleteUser($id);
				}
			}else{
				$this->welcome();
			}


		}

	
		public function welcome(){
			$dataArray = $this->model->getArray();
			$this->load->view('welcome.php', $dataArray);

		}

		public function showUsers(){
			$dataUsers = $this->model->getUsers();
			$this->load->view('list.php', $dataUsers);
		}

		public function editUsers($id){
			$dataUsers = $this->model->editUsersco($id);
			$this->load->view('edit.php', $dataUsers);
		}

		public function ActUsers($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $id){
			$dataUsers = $this->model->ActUsersco($documento, $nombres, $telefono, $direccion, $ciudad, $correo, $id);
			 $this->load->view('welcome.php', $dataUsers);
		}

		public function addUsers(){
			$this->load->view('add.php');
		}
		public function addUsersP($documento,$nombres,$telefono,$direccion,$ciudad,$correo){
			$dataUsers = $this->model->addUsersPco($documento, $nombres, $telefono, $direccion, $ciudad, $correo);
			$this->load->view('welcome.php', $dataUsers);
		}
		public function deleteUser($id){
			$dataUsers = $this->model->deleUser($id);
			$this->load->view('welcome.php', $dataUsers);
		}
	}