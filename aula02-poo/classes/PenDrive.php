<?php

    class PenDrive {
        // publico => orelhao 
        // protegido => telefone residencial
        // privado => celular 

         // publico: pois, futuramente iremos adicionar musicas na propriedade listaDeMusicas,
         // e se tornarmos esta proprieadade privada nao conseguiremos alterar de nenhuma forma
         // portanto nao conseguiremos adicionar musicas.
        public $listaDeMusicas;

        public function __construct(){
            $this->listaDeMusicas = [];
        }

        public function adicionarMusica($musica){
            array_push($this->listaDeMusicas, $musica);
            echo "A música $musica foi adicionada ao pen-drive";
        }

        public function removerMusica($musicaParam){
            foreach ($this->listaDeMusicas as $chave => $musica) {
                if($musicaParam == $musica){
                    unset($this->listaDeMusicas[$chave]);
                    echo "A música $musicaParam foi removida com sucesso";
                }
            }
        }
    }

?>