<?php

    require_once("./classes/AnimalMarinho.php");
    require_once("./classes/Tubarao.php");

    echo "<h1>Animal Marinho</h1>";
    $animalMarinho = new AnimalMarinho();
    $animalMarinho->respirar();
    echo "<br>";

    $animalMarinho->locomover();
    echo "<br>";

    $animalMarinho->emitirSom();
    echo "<hr>";

    echo "<h1>Tubarão</h1>";
    $tubarao = new Tubarao();
    $tubarao->respirar();
    echo "<br>";

    $tubarao->locomover();
    echo "<br>";

    $tubarao->emitirSom();
    echo "<br>";

?>