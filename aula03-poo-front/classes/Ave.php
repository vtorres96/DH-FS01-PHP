<?php
    require_once("Animal.php");

    class Ave extends Animal {

        private $corDePenas;

        public function __construct(){
            $this->corDePenas = "Branco";
        }

        public function locomover(){
            echo "<li class='list-group-item'>Sou uma ave voando</li>";
        }
        
        public function alimentar(){
            echo "<li class='list-group-item'>Comendo como uma ave</li>";
        }
        
        public function emitirSom(){
            echo "<li class='list-group-item'>Piu piu piu</li>";
        }

        public function setCorDePenas($corDePenas){
            $this->corDePenas = $corDePenas;
        }

        public function getCorDePenas(){
            return $this->corDePenas;
        }
    }
?>