<?php

    require_once("Equipamento.php");

    class AparelhoDeSom extends Equipamento {
        // publico => orelhao 
        // protegido => telefone residencial
        // privado => celular 

        // privado: pois, somente esta classe ira utilizar a propriedade, ou seja, somente
        // teremos condição de alterar a propriedade nos métodos dentro da classe PenDrive.
        private $volume;
        private $numeroDeFaixa;
        private $usb;

        public function __construct(){
            $this->volume = 0;
            $this->numeroDeFaixa = 0;
        }

        public function conectar($penDrive){
            if($this->ligado){
                $this->usb = $penDrive;
                echo "O pen-drive foi conectado";
            }            
        }

        public function reproduzir(){
            if($this->ligado){
                if($this->numeroDeFaixa < count($this->usb->listaDeMusicas)){
                    echo "Tocando: " . $this->usb->listaDeMusicas[0];
                }
            }
        }

        public function avancarFaixa(){
            if($this->ligado && $this->usb){
                if($this->numeroDeFaixa < count($this->usb->listaDeMusicas)){
                    $this->numeroDeFaixa++;
                    echo "Avancou para faixa " . $this->usb->listaDeMusicas[$this->numeroDeFaixa];
                } else {
                    echo "Você está na última faixa da lista de músicas";
                }
            }
        }
    }

?>