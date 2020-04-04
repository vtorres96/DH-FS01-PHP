<?php

	require_once("Reptil.php");

	class Tartaruga extends Reptil {

		// Sobrecarga de métodos, pois locomer() é um método existente em Mamífero
		public function locomover(){
			echo "<li class='list-group-item'>Sou uma tartaruga e estou nadando</li>";
		}

		public function lutar(){
			echo "<li class='list-group-item'>Lutando como tartaruga ninja</li>";
		}

		public function emitirSom(){
			echo "<li class='list-group-item'><b>Yah!</b></li>";
		}

	}

?>