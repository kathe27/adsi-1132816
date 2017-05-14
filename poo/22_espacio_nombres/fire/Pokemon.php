<?php 
namespace fire;

class Pokemon {
	private $name = "Charmander";
	private $pc = 200;

	
	public function getPokemon() {
		return "<li>Nombre: ".$this->name.", Puntos Combate: ".$this->pc."</li>";
	}
}
?>