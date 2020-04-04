<?php

    require_once("AnimalMarinho.php");

    class Tubarao extends AnimalMarinho {

        private $forcaDaMordida;

        public function locomover(){
            echo "Estou nadando a 40 km/h pois sou um tubarão veloz";
        }

        
    }
?>