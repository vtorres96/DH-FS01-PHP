<?php

    require_once("./classes/ControleRemoto.php");

    $controleRemoto = new ControleRemoto();

    $controleRemoto->ligar();
    echo "<br>";

    $controleRemoto->aumentarVolume();
    echo "<br>";

    $controleRemoto->setVolume(3);

    $controleRemoto->aumentarVolume();
    echo "<br>";

    $controleRemoto->diminuirVolume();
    echo "<br>";

    $controleRemoto->setVolume(0);

    $controleRemoto->diminuirVolume();
    echo "<br>";

    $controleRemoto->ativarMute();
    echo "<br>";

    $controleRemoto->desativarMute();
    echo "<br>";

    $controleRemoto->desligar();
    echo "<br>";
?>