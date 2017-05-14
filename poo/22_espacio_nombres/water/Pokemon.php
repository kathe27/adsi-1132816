<?php 
namespace water;

class Pokemon {
	private $name = "Squirtle";
	private $pc = 210;

	
	public function getPokemon() {
		return "<li>Nombre: ".$this->name.", Puntos Combate: ".$this->pc."</li>";
	}
}
?>