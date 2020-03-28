<?php

    // classe IMC
    class IndiceMassaCorporal {

        // atributos
        public $pesoProp;
        public $alturaProp;

        // metodos
        public function calculaMassaCorporal(){
            $imc = ($this->pesoProp / ($this->alturaProp * $this->alturaProp));
            return $imc;
        }

        public function situacaoPeso(){
            $x = $this->calculaMassaCorporal();

            if($x < 20){
                return "Abaixo do peso";
            } else if($x >= 20 && $x < 25){
                return "Peso ideal";
            } else {
                return "Acima do peso";
            }
        }
    }

?>