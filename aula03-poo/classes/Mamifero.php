<?php

    require_once("Animal.php");

     // herdando a classe Animal para conseguir trabalhar com métodos da mesma
    class Mamifero extends Animal {

        // teremos que implementar o método abstrato locomover pois 
        // ele é um metodo da classe Animal, que é a classe que estamos
        // assinando um contrato e sendo obrigados a implementar os métodos dela
        public function locomover(){
            echo "Estou me locomovendo correndo";
        }

        // teremos que implementar o método abstrato locomover pois 
        // ele é um metodo da classe Animal, que é a classe que estamos
        // assinando um contrato e sendo obrigados a implementar os métodos dela
        public function emitirSom(){
            echo "Estou emitindo som de animal mamífero";
        }
    }

?>