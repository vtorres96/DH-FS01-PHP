<?php

    require_once("AnimalMarinho.php");

    // herdando a classe AnimalMarinho para conseguir trabalhar com métodos da mesma
    class Tubarao extends AnimalMarinho {

        private $forcaDaMordida;

        public function locomover(){
            echo "Estou nadando a 40 km/h pois sou um tubarão veloz";
        }

        public function getForcaDaMordida(){
            return $this->forcaDaMordida;
        }

        public function setForcaDaMordida($forca){
            $this->forcaDaMordida = $forca;
        }
    }
?>