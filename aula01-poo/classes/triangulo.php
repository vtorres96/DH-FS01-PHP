<?php

    // classe Triangulo
    class Triangulo {

        // atributos
        public $baseProp;
        public $alturaProp;

        // metodos
        public function calculaArea(){
            $area = (($this->baseProp * $this->alturaProp) / 2);
            return $area;
        }
    }

?>