<?php

	// CRIAÇÃO DE CLASSE ABSTRATA ANIMAL
    abstract class Animal {

        protected $peso;
        protected $idade;
        protected $membros;

        // Métodos abstratos são declarados na classe abstrata mas não são definidos (a ação em si não é declarada aqui)
        // Isso nos permite criar execuções distintas dessas funções em cada classe (exemplo: todo mamífero come, mas cada um come de uma maneira)
        // Se não declarássemos como abstrato, teríamos de sobrescrever os métodos previamente declarados quando quiséssemos 
        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();
    }
    
?>