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
                echo "Impossível aumentar volume, aparelho de TV desligado";
            }
        }

        function diminuirVolume(){
            $volumeMinimo = 0;

            if($this->getLigado()){
                if($this->getVolume() > $volumeMinimo){
                    $this->setVolume($this->getVolume() - 1);

                    if($this->getVolume() != 0){
                        echo "Volume diminuído, volume atual : " . $this->getVolume();
                    } 
                } else {
                    echo "Você deixou o aparelho de TV no mute";
                }
            } else {
                echo "Impossível diminuir volume, aparelho de TV desligado";
            }
        }

        function ativarMute(){
            if($this->getLigado()){
                if($this->getVolume() > 0){
                    $this->setVolume(0);
                    echo "O mute foi ativado " . $this->getVolume();
                } else {
                    echo "O mute já está ativado";
                }
            } else {
                echo "Impossível ativar mute, aparelho de TV desligado";
            }
        }

        function desativarMute(){
            if($this->getLigado()){
                if($this->getVolume() == 0){
                    $this->setVolume(2);
                    echo "O mute foi desativado, volume atual : " . $this->getVolume();
                }
            } else {
                echo "Impossível desativar mute, aparelho de TV desligado";
            }
        }
        
        
    }

?>