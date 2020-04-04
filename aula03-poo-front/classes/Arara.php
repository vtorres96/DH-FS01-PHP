<?php

	require_once("Ave.php");

	class Arara extends Ave {

		// Sobrecarga de métodos, pois locomer() é um método existente em Mamífero
		public function locomover(){
			echo "<li class='list-group-item'>Sou uma arara e estou voando</li>";
		}

		public function bicar(){
			echo "<li class='list-group-item'>Bicando</li>";
		}

		public function emitirSom(){
			echo "<li class='list-group-item'>Arara arara!</li>";
		}

	}

?>