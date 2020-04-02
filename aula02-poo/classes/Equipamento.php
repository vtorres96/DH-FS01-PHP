<?php

    // se torna uma classe abstrata quando queremos que uma classe sirva de modelo
    // com a permissão de mudar o comportamento de classes que irao implementa-la
    // (podemos pensar que as classes filhas irão assinar um contrato com a mlasse modelo)
    abstract class Equipamento {

        // metodos podem ser: publicos, protegidos ou privados

        // protegido: pois, somente a classe modelo e as classes filhas que herdam desta classe
        // modelo poderão utilizar esta propriedade ligado.
        protected $ligado;

        public function __construct(){
            $this->ligado = false;
        }

        public function ligar(){
            if($this->ligado){
                echo "O equipamento já está ligado";
            } else {
                $this->ligado = true;
                echo "O equipamento foi ligado";
            }
        }

        public function desligar(){
            if(!$this->ligado){
                echo "O equipamento já está desligado";
            } else { 
                $this->ligado = false;
                echo "O equipamento foi desligado";
            }
        }
    }

?>