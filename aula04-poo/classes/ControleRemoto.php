<?php

    require_once("PlacaControle.php");

    class ControleRemoto implements PlacaControle {

        private $ligado;
        private $volume;

        public function __construct(){
            $this->ligado = false;
            $this->volume = 0;
        }

        public function getLigado(){
            return $this->ligado;
        }

        public function setLigado($ligado){
            $this->ligado = $ligado;
        }

        public function getVolume(){
            return $this->volume;
        }

        public function setVolume($volume){
            $this->volume = $volume;
        }

        function ligar(){
            if($this->getLigado()){
                echo "O aparelho de TV já está ligado";
            } else {
                $this->setLigado(true);
                echo "O aparelho de TV foi ligado";
            }
        }

        function desligar(){
            if($this->getLigado()){
                $this->setLigado(false);
                echo "O aparelho de TV foi desligado";
            } else {
                echo "O aparelho de TV já está desligado";
            }
        }

        function aumentarVolume(){
            $volumeMaximo = 3;

            if($this->getLigado()){
                if($this->getVolume() < $volumeMaximo){
                    $this->setVolume($this->getVolume() + 1);
                    echo "Volume aumentado, volume atual : " . $this->getVolume();
                } else {
                    echo "Você está no volume máximo, cuidado com os tímpanos.";
                }
            } else {
                echo "Impossível aumentar volume, aparelho desligado";
            }
        }

        function diminuirVolume(){
            // echo "estou diminuindo o volume";
        }

        function ativarMute(){
            // echo "estou ativando o mute";
        }

        function desativarMute(){
            // echo "estou desativando o mute";
        }
        
        
    }

?>