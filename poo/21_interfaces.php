<?php 
	interface iphoto{
    public function setPhoto($name, $width, $height);
    public function getPhoto();
	}

	class Photo implements iphoto{
   		 private $name;
   		 private $width;
    	 private $height;

    public function setPhoto($name, $width, $height){
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
    }
    public function getPhoto(){
        return "Nombre: ".$this->name."<br>"." Ancho: ".$this->width."<br>"." Alto: ".$this->height;
    }
}

$gf = new Photo;
$gf->setPhoto('paisaje.png', '1024px','800px');
echo $gf->getPhoto();

?>
