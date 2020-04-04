<?php

	require_once("Peixe.php");

	class Tilapia extends Peixe {

		// Sobrecarga de métodos, pois locomer() é um método existente em Mamífero
		public function locomover(){
			echo "<li class='list-group-item'>Sou uma tilápia e estou nadando</li>";
		}

		public function soltarBolhas(){
			echo "<li class='list-group-item'>Blub blub blub</li>";
		}

		public function emitirSom(){
			echo "<li class='list-group-item'><b>Peixe não emite som!</b></li>";
		}

	}

?>