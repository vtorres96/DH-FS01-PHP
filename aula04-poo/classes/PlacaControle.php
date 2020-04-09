<?php

    interface PlacaControle {
        function ligar();
        function desligar();
        function aumentarVolume();
        function diminuirVolume();
        function ativarMute();
        function desativarMute();
    }
?>