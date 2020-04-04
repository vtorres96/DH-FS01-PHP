<?php

    require_once("Mamifero.php");

    // herdando a classe mAMIFERO para conseguir trabalhar com métodos da mesma
    class Cachorro extends Mamifero {

        private $cor;

        public function locomover(){
            echo "Estou trotando";
        }

        public function emitirSom(){
            echo "Au au";
        }

        public function roerOsso(){
            echo "Estou roendo um osso";
        }

        // criando método get para obter o valor da propriedade privada sem acessar a propriedade diretamente
        public function getCor(){
            return $this->cor;
        }

        // criando método set para definir um valor da propriedade privada sem acessar a propriedade diretamente
        // para fazer a atribuicao de um novo valor
        public function setCor($corDePelos){
            $this->cor = $corDePelos;
        }
    }

?>