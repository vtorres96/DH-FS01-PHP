<?php
    require_once("Animal.php");

    class Peixe extends Animal {

        private $corDeEscama;

        public function __construct(){
            $this->corDeEscama = "Branco";
        }

        public function locomover(){
            echo "<li class='list-group-item'>Sou um peixe nadando</li>";
        }
        
        public function alimentar(){
            echo "<li class='list-group-item'>Comendou na água</li>";
        }
        
        public function emitirSom(){
            echo "<li class='list-group-item'><b>Som de peixe???</b></li>";
        }

        public function setCorDeEscamas($corDeEscama){
            $this->corDeEscama = $corDeEscama;
        }

        public function getCorDeEscamas(){
            return $this->corDeEscama;
        }
    }
?>