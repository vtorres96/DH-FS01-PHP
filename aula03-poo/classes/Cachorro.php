<?php

    require_once("Mamifero.php");

    // herdando a classe mAMIFERO para conseguir trabalhar com métodos da mesma
    class Cachorro extends Mamifero {

        private $cor;

        public function locomover(){
            echo "Estou trotando";
        }

        public function emitirSom(){
            echo "Au au";
        }

        public function roerOsso(){
            echo "Estou roendo um osso";
        }
    }

?>