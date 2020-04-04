<?php

    require_once("Equipamento.php");

    // herdando a classe Equipamento para conseguir trabalhar com métodos da mesma
    class AspiradorDePo extends Equipamento {
        // publico => orelhao 
        // protegido => telefone residencial
        // privado => celular 

        // privado: pois, somente esta classe ira utilizar a propriedade, ou seja, somente
        // teremos condição de alterar a propriedade nos métodos dentro da classe PenDrive.
        private $filtro;

        public function __construct(){
            $this->filtro = [];
        }

        public function aspirar(){
            if($this->ligado){
                if(count($this->filtro) < 4){
                    array_push($this->filtro, "Nova sujeira");
                    echo "Foi adicionada uma nova sujeiro no aspirador";
                } else {
                    echo "Filtro de sujeira do aspirador de pó está cheio, limpe-o";
                }
            } else {
                echo "Aspirador de pó desligado impossível aspirar";
            }
        }

        public function limparFiltro(){
            if(!$this->ligado){
                foreach ($this->filtro as $chave => $sujeira) {
                    if($sujeira){
                        unset($this->filtro[$chave]);
                    }
                }
                echo "O filtro de sujeira do aspirador está vazio. Pode limpar";
            } else {
                echo "Desligue o aspirador para limpar o filtro";
            }
        }
        
    }

?>