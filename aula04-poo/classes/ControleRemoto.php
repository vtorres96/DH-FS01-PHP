<?php

    require_once("PlacaControle.php");

    class ControleRemoto implements PlacaControle {

        function ligar(){
            echo "estou ligado";
        }

        function desligar(){
            echo "estou desligado";
        }

        function aumentarVolume(){
            echo "estou aumentando o volume";
        }

        function diminuirVolume(){
            echo "estou diminuindo o volume";
        }

        function ativarMute(){
            echo "estou ativando o mute";
        }

        function desativarMute(){
            echo "estou desativando o mute";
        }
        
    }

?>