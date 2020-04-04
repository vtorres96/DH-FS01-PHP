<?php
    require_once("Animal.php");

    class Mamifero extends Animal {

        private $corDePelos;

        public function __construct(){
            $this->corDePelos = "Branco";
        }

        public function locomover(){
            echo "<li class='list-group-item'>Sou um mamífero correndo</li>";
        }
        
        public function alimentar(){
            echo "<li class='list-group-item'>Amamentando-se</li>";
        }
        
        public function emitirSom(){
            echo "<li class='list-group-item'>Som de mamífero</li>";
        }

        public function setCorDePelos($corDePelos){
            $this->corDePelos = $corDePelos;
        }

        public function getCorDePelos(){
            return $this->corDePelos;
        }
    }
?>