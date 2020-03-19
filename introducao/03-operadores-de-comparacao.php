<?php $titulo = "Operadores de Comparação | PHP"; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titulo ?></title>
</head>
<body>

    <?= "<h1>$titulo</h1><span><b>Repare que vamos usar as mesmas variáveis \$num11 e \$num12 ao longo do documento</b></span>"; ?>

    <?php

        // VALORES
        echo "<br><h2>Valores Utilizados</h2>";
        $num1 = 13;
        $num2 = 36;
        echo "<p><span style='color:blue;'>\$num1 = $num1;<br>\$num2 = $num2;</span><br>";


        echo "<hr>";


        // IGUALDADE
        echo "<br><h2>Igual</h2>";

        echo "<p>Comparando Integer com Integer<br>";
        echo "<span style='color:blue;'>\$num1 == 13;</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 == 13 ); 
        echo "</b> (true)</p>";

        echo "<p>Comparando Integer com String<br>";
        echo "<span style='color:blue;'>\$num1 == \"13\";</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 == "13" ); 
        echo "</b> (true, pois compara apenas o valor)</p>";


        echo "<hr>";


        // NÃO IGUAIS
        echo "<br><h2>Não Iguais</h2>";

        echo "<p>Comparando \$num1 com \"13\" usando &lt; &gt;<br>";
        echo "<span style='color:blue;'>\$num1 <> \"13\";</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 <> "13" ); 
        echo "</b> (false, pois têm os mesmos valores)</p>";

        echo "<p>Comparando \$num1 com \$num2 usando !=<br>";
        echo "<span style='color:blue;'>\$num1 != \$num2;</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 != $num2 ); 
        echo "</b> (true, pois não têm os mesmos valores)</p>";


        echo "<hr>";


        // IDENTICIDADE
        echo "<br><h2>Idêntico</h2>";

        echo "<p>Comparando Integer com Integer<br>";
        echo "<span style='color:blue;'>\$num1 === 13;</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 === 13 ); 
        echo "</b> (true)</p>";

        echo "<p>Comparando Integer com String<br>";
        echo "<span style='color:blue;'>\$num1 === \"13\";</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 === "13" ); 
        echo "</b> (false, pois têm valores distintos)</p>";


        echo "<hr>";


        // NÃO IDÊNTICOS
        echo "<br><h2>Não Idênticos</h2>";

        echo "<p>Comparando \$num1 com 13 usando !==<br>";
        echo "<span style='color:blue;'>\$num1 !== \"13\";</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 !== "13" ); 
        echo "</b> (true, pois têm valores iguais mas são de tipos diferentes)</p>";


        echo "<hr>";


        // MENOR
        echo "<br><h2>Menor</h2>";

        echo "<p>Comparando \$num1 com \$num2<br>";
        echo "<span style='color:blue;'>\$num1 < \$num2;</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 < $num2 ); 
        echo "</b></p>";


        echo "<hr>";


        // MENOR OU IGUAL
        echo "<br><h2>Menor ou Igual</h2>";

        echo "<p>Comparando \$num1 com \$num2<br>";
        echo "<span style='color:blue;'>\$num1 <= \$num2;</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 <= $num2 ); 
        echo "</b></p>";


        echo "<hr>";


        // MAIOR
        echo "<br><h2>Maior</h2>";

        echo "<p>Comparando \$num1 com \$num2<br>";
        echo "<span style='color:blue;'>\$num1 > \$num2;</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 > $num2 ); 
        echo "</b></p>";


        echo "<hr>";


        // MAIOR OU IGUAL
        echo "<br><h2>Maior ou Igual</h2>";

        echo "<p>Comparando \$num1 com \$num2<br>";
        echo "<span style='color:blue;'>\$num1 >= \$num2;</span><br>";
        echo "Retorna: <b>";
        echo ( $num1 >= $num2 ); 
        echo "</b></p>";

    ?>

</body>
</html>