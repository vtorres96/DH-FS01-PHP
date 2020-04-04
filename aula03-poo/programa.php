<?php

    require_once("./classes/AnimalMarinho.php");

    echo "<h1>Animal Marinho</h1>";
    $animalMarinho = new AnimalMarinho();
    $animalMarinho->respirar();
    echo "<br>";

    $animalMarinho->locomover();

?>