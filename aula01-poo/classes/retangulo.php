<?php

    // classe Retangulo
    class Retangulo {

        // atributos
        public $baseProp;
        public $alturaProp;

        // metodos
        public function calculaArea(){
            $area = ($this->baseProp * $this->alturaProp);
            return $area;
        }
    }

?>