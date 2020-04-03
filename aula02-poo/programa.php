<?php

    require_once("./classes/Equipamento.php");
    require_once("./classes/AspiradorDePo.php");
    require_once("./classes/PenDrive.php");
    require_once("./classes/AparelhoDeSom.php");

    echo "<h1>Aspirador de Pó</h1>";

    $aspiradorDePo = new AspiradorDePo();
    $aspiradorDePo->ligar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";

    $aspiradorDePo->desligar();
    echo "<br>";

    $aspiradorDePo->aspirar();
    echo "<br>";
  
    $aspiradorDePo->limparFiltro();
    echo "<hr>";

    echo "<h1>Pen Drive</h1>";
    $penDrive = new PenDrive();
    $penDrive->adicionarMusica("musica1.mp3");
    echo "<br>";

    $penDrive->adicionarMusica("musica2.mp3");
    echo "<br>";

    $penDrive->adicionarMusica("musica3.mp3");
    echo "<br>";

    $penDrive->removerMusica("musica3.mp3");
    echo "<hr>";

    echo "<h1>Aparelho De Som</h1>";

    $aparelhoDeSom = new AparelhoDeSom();
    $aparelhoDeSom->ligar();
    echo "<br>";

    $aparelhoDeSom->conectar($penDrive);
    echo "<br>";

    $aparelhoDeSom->reproduzir();
    echo "<br>";

    $aparelhoDeSom->avancarFaixa();
    echo "<br>";
?>