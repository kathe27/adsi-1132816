<?php 
	class Catalogo{
		public $disquera;
		public $artista  = array();
		public $album    = array();
		public $genero   = array();
		public $ano      = array();

		public function __construct($dis){
			$this->disquera = $dis;
		}

		public function setCatalogo($art, $alb, $gen, $ano){
			$this->artista[] = $art;
			$this->album  [] = $alb;
			$this->genero [] = $gen;
			$this->ano    [] = $ano;
		}
		public function getCatalogo(){
			echo "<h2>".$this->disquera."</h2>";
			for ($i=0; $i < count($this->artista); $i++){
				echo "<ul>";
				echo "<li> Artista: ".$this->artista[$i]."</li>";
				echo "<li> Album  : ".$this->album[$i]."</li>";
				echo "<li> Genero : ".$this->genero[$i]."</li>";
				echo "<li> Año    : ".$this->ano[$i]."</li>";
				echo "</ul>";
			}
		}
	}
	$cat = new Catalogo('Pink Metal');
	$cat->setCatalogo('Nirvana','Never Mind','Grunge',1991);
	$cat->setCatalogo('Akash','Mas halla de la realidad','Rock',2003);
	$cat->setCatalogo('Evanescence','Daredevil','Metal Gotico',2003);
	$cat->setCatalogo('Metallica','The Unforgiven','Heavy Metal',1991);
	$cat->setCatalogo('Mago de Oz','Molinos de viento','Rock en Español',1998);
	$cat->setCatalogo('Diomedez Diaz','Listo pa la foto','Vallenato',1990);
	$cat->setCatalogo('Charrito Negro','Si supieras','Ranchera',1992);
	$cat->setCatalogo('John Lennon','Remember','Rock',1970);
	$cat->setCatalogo('Niga','Te quiero','Reggae',2007);
	$cat->setCatalogo('Makano','Te amo','Reggae',2008);
	$cat->setCatalogo('Juanes','A Dios le Pido','Rock',2002);
	$cat->setCatalogo('Juanes','Para Tu Amor','Rock',2004);
	$cat->setCatalogo('Shakira','La bicicleta','Pop',2016);
	$cat->setCatalogo('Shakira','Chantaje','Pop',2016);
	$cat->setCatalogo('Pasabordo','El Besito','Pop Urbano',2012);
	$cat->setCatalogo('Ha Ash','Perdon, Perdon','Pop',2014);
	$cat->setCatalogo('Ha Ash','Lo Aprendi de Ti','Pop',2014);
	$cat->setCatalogo('Evanescence','My Inmortal','Metal Gotico',2000);
	$cat->setCatalogo('Evanescence','Going Under','Metal Gotico',2003);
	$cat->setCatalogo('Pasabordo','Noche Loca','Pop Urbano',2016);
	$cat->getCatalogo();
 ?>
