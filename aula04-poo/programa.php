<?php

    require_once("./classes/ControleRemoto.php");

    $controleRemoto = new ControleRemoto();

    $controleRemoto->ligar();
    $controleRemoto->desligar();

    $controleRemoto->aumentarVolume();
    $controleRemoto->diminuirVolume();

    $controleRemoto->ativarMute();
    $controleRemoto->desativarMute();

?>