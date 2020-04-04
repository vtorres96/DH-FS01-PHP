<?php

    require_once("AnimalMarinho.php");

    // herdando a classe AnimalMarinho para conseguir trabalhar com métodos da mesma
    class Tubarao extends AnimalMarinho {

        private $forcaDaMordida;

        public function locomover(){
            echo "Estou nadando a 40 km/h pois sou um tubarão veloz";
        }

        // criando método get para obter o valor da propriedade privada sem acessar a propriedade diretamente
        public function getForcaDaMordida(){
            return $this->forcaDaMordida;
        }

        // criando método set para definir um valor da propriedade privada sem acessar a propriedade diretamente
        // para fazer a atribuicao de um novo valor
        public function setForcaDaMordida($forca){
            $this->forcaDaMordida = $forca;
        }
    }
?>