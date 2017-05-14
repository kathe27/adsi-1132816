<?php 
namespace electric;

class Pokemon {
	private $name = "Pikachu";
	private $pc = 230;
	public function getPokemon() {
		return "<li>Nombre: ".$this->name.", Puntos Combate: ".$this->pc."</li>";
	}
}
?>
