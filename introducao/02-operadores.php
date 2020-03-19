<?php $titulo = "Operadores Básicos | PHP"; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titulo ?></title>
</head>
<body>

    <?= "<h1>$titulo</h1>"; ?>

    <?php

        // SOMA
        echo "<br><h2>Soma</h2>";

        $num1 = 1;
        $num2 = 10;
        echo "<p><span style='color:blue;'>\$num1 = 1;<br>\$num2 = 10;<br>";
        echo "echo (\$num1 + \$num2);</span><br>Retorna: <b>" . ($num1 + $num2) . "</b></p>";


        echo "<hr>";


        // SUBTRAÇÃO
        echo "<br><h2>Subtração</h2>";

        $num1 = 100;
        $num2 = 10;
        echo "<p><span style='color:blue;'>\$num1 = 100;<br>\$num2 = 10;<br>";
        echo "echo (\$num1 - \$num2);</span><br>Retorna: <b>" . ($num1 - $num2) . "</b></p>";


        echo "<hr>";


        // MULTIPLICAÇÃO
        echo "<br><h2>Multiplicação</h2>";

        $num1 = 4;
        $num2 = 3;
        echo "<p><span style='color:blue;'>\$num1 = 4;<br>\$num2 = 3;<br>";
        echo "echo (\$num1 * \$num2);</span><br>Retorna: <b>" . ($num1 * $num2) . "</b></p>";


        echo "<hr>";


        // DIVISÃO
        echo "<br><h2>Divisão</h2>";

        $num1 = 48;
        $num2 = 3;
        echo "<p><span style='color:blue;'>\$num1 = 48;<br>\$num2 = 3;<br>";
        echo "echo (\$num1 / \$num2);</span><br>Retorna: <b>" . ($num1 / $num2) . "</b></p>";


        echo "<hr>";


        // MÓDULO
        echo "<br><h2>Módulo (resto)</h2>";

        $num1 = 47;
        $num2 = 4;
        echo "<p><span style='color:blue;'>\$num1 = 47;<br>\$num2 = 4;<br>";
        echo "echo (\$num1 % \$num2);</span><br>Retorna: <b>" . ($num1 % $num2) . "</b><br><small>47 / 4 = 11 e sobra <b>3</b>, seu módulo.</small></p>";

    ?>

</body>
</html>