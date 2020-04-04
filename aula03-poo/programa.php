<?php

    require_once("./classes/AnimalMarinho.php");
    require_once("./classes/Tubarao.php");
    require_once("./classes/Cachorro.php");

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
    echo "<hr>";

    echo "<h1>Cachorro</h1>";
    $cachorro = new Cachorro();
    $cachorro->locomover();
    echo "<br>";

    $cachorro->emitirSom();
    echo "<br>";

    $cachorro->roerOsso();
    echo "<hr>";

    echo "<h1>Métodos Get e Set</h1>";
    $tubarao->setForcaDaMordida(1000);
    echo "O tubarão tem a forca de mordida " . $tubarao->getForcaDaMordida() . "kg";
    echo "<br>";

    $cachorro->setCor("Marrom");
    echo "O cachorro tem a cor " . $cachorro->getCor();

?>