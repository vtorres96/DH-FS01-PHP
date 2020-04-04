<?php
    require_once("Animal.php");

    class Reptil extends Animal {

        private $corDeCasco;

        public function __construct(){
            $this->corDeCasco = "Verde Escuro";
        }

        public function locomover(){
            echo "<li class='list-group-item'>Sou um réptil rastejando</li>";
        }
        
        public function alimentar(){
            echo "<li class='list-group-item'>Comendou outros bichos</li>";
        }
        
        public function emitirSom(){
            echo "<li class='list-group-item'>tsss....</li>";
        }

        public function setCorDeCasco($corDeCasco){
            $this->corDeCasco = $corDeCasco;
        }

        public function getCorDeCasco(){
            return $this->corDeCasco;
        }
    }
?>