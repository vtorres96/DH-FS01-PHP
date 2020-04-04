<?php

    require_once("Animal.php");

    // herdando a classe Animal para conseguir trabalhar com métodos da mesma
    class AnimalMarinho extends Animal {

        // teremos condição de alterar a propriedade nos métodos dentro da classe PenDrive.
        public function __construct(){
            $this->tipoDeRespiracao = "dentro do mar";
        }

        // teremos que implementar o método abstrato locomover pois 
        // ele é um metodo da classe Animal, que é a classe que estamos
        // assinando um contrato e sendo obrigados a implementar os métodos dela
        public function locomover(){
            echo "Estou me locomovendo nadando dentro do mar";
        }

        // teremos que implementar o método abstrato emitirSom pois 
        // ele é um metodo da classe Animal, que é a classe que estamos
        // assinando um contrato e sendo obrigados a implementar os métodos dela
        public function emitirSom(){
            echo "Estou emitindo som de animal marinho";
        }

        public function respirar(){
            if(!$this->tipoDeRespiracao == "dentro do mar"){
                echo "Subiu para superfície do mar para respirar ar puro";
            } else {
                echo "Está respirando dentro do mar";
            }
        }
    }

?>