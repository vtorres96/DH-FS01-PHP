<?php $titulo = "Operadores de Atribuição | PHP"; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titulo ?></title>
</head>
<body>
 
    <?= "<h1>$titulo</h1><span><b>Repare que vamos usar a mesma variável \$num ao longo do documento</b></span>"; ?>

    <?php

        // ATRIBUIÇÃO
        echo "<br><h2>Atribuição</h2>";

        $num = 1;
        echo "<p><span style='color:blue;'>\$num = 1;<br>";
        echo "echo \$num;</span><br>Retorna: <b>" . $num . "</b></p>";


        echo "<hr>";


        // SOMA E ATRIBUIÇÃO
        echo "<br><h2>Soma e Atribuição</h2>";

        $num += 99;
        echo "<p><span style='color:blue;'>\$num += 99;<br>";
        echo "echo \$num;</span><br>Retorna: <b>" . $num . "</b></p>";


        echo "<hr>";


        // SUBTRAÇÃO E ATRIBUIÇÃO
        echo "<br><h2>Subtração e Atribuição</h2>";

        $num -= 50;
        echo "<p><span style='color:blue;'>\$num -= 50;<br>";
        echo "echo \$num;</span><br>Retorna: <b>" . $num . "</b></p>";


        echo "<hr>";


        // MULTIPLICAÇÃO E ATRIBUIÇÃO
        echo "<br><h2>Multiplicação e Atribuição</h2>";

        $num *= 2;
        echo "<p><span style='color:blue;'>\$num *= 2;<br>";
        echo "echo \$num;</span><br>Retorna: <b>" . $num . "</b></p>";


        echo "<hr>";


        // DIVISÃO E ATRIBUIÇÃO
        echo "<br><h2>Divisão e Atribuição</h2>";

        $num /= 4;
        echo "<p><span style='color:blue;'>\$num /= 4;<br>";
        echo "echo \$num;</span><br>Retorna: <b>" . $num . "</b></p>";


        echo "<hr>";


        // MÓDULO E ATRIBUIÇÃO
        echo "<br><h2>Módulo e Atribuição</h2>";

        $num %= 4;
        echo "<p><span style='color:blue;'>\$num %= 4;<br>";
        echo "echo \$num;</span><br>Retorna: <b>" . $num . "</b></p>";


        echo "<hr>";


        // CONCATENAÇÃO E ATRIBUIÇÃO
        echo "<br><h2>Concatenação e Atribuição</h2>";

        $num .= 4;
        echo "<p><span style='color:blue;'>\$num .= 4;<br>";
        echo "echo \$num;</span><br>Retorna: <b>" . $num . "</b></p>";

    ?>

</body>
</html>