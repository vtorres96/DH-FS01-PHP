<?php

	require_once("Mamifero.php");

	class Cachorro extends Mamifero {

		// Sobrecarga de métodos, pois locomer() é um método existente em Mamífero
		public function locomover(){
			echo "<li class='list-group-item'>Sou um cachorro e estou correndo</li>";
		}

		public function roerOsso(){
			echo "<li class='list-group-item'>Roendo osso</li>";
		}

		public function emitirSom(){
			echo "<li class='list-group-item'>Au au au</li>";
		}

	}

?>