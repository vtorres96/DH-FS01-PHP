<?php

    // se torna uma classe abstrata quando queremos que uma classe sirva de modelo
    // com a permissão de mudar o comportamento de classes que irao implementa-la
    // (podemos pensar que as classes filhas irão assinar um contrato com a mlasse modelo)
    abstract class Animal {
        // metodos podem ser: publicos, protegidos ou privados

        // protegido: pois, somente a classe modelo e as classes filhas que herdam desta classe
        // modelo poderão utilizar esta propriedade ligado.

        // publico => orelhao 
        // protegido => telefone residencial
        // privado => celular 
        protected $peso;
        protected $idade;
        protected $tipoDeRespiracao;

        abstract function locomover();
        abstract function emitirSom();
    }

?>