<?php $titulo = "Tipos de Dados | PHP"; ?>
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
        // STRINGS
        echo "<br><h2>Variáveis com Strings</h2>";

        $variavelString01 = "a";
        echo "<p><span style='color:blue;'>\$variavelString01 = \"a\";<br>";
        echo "echo \$variavelString01;</span><br>Retorna: <b>" . $variavelString01 . "</b></p>";

        $variavelString02 = "abc";
        echo "<p><span style='color:blue;'>\$variavelString02 = \"abc\";<br>";
        echo "echo \$variavelString02;</span><br>Retorna: <b>" . $variavelString02 . "</b></p>";

        $variavelString03 = "a b c";
        echo "<p><span style='color:blue;'>\$variavelString03 = \"a b c\";<br>";
        echo "echo \$variavelString03;</span><br>Retorna: <b>" . $variavelString03 . "</b></p>";

        $variavelString04 = "100";
        echo "<p><span style='color:blue;'>\$variavelString04 = \"100\";<br>";
        echo "echo \$variavelString04;</span><br>Retorna: <b>" . $variavelString04 . "</b></p>";


        echo "<hr>";


        // INTEGERS
        echo "<br><h2>Variáveis com Integers (números inteiros)</h2>";

        $variavelInteger01 = 0;
        echo "<p><span style='color:blue;'>\$variavelInteger01 = 0;<br>";
        echo "echo \$variavelInteger01;</span><br>Retorna: <b>" . $variavelInteger01 . "</b></p>";

        $variavelInteger02 = 100;
        echo "<p><span style='color:blue;'>\$variavelInteger02 = 100;<br>";
        echo "echo \$variavelInteger02;</span><br>Retorna: <b>" . $variavelInteger02 . "</b></p>";

        $variavelInteger03 = -100;
        echo "<p><span style='color:blue;'>\$variavelInteger03 = -100;<br>";
        echo "echo \$variavelInteger03;</span><br>Retorna: <b>" . $variavelInteger03 . "</b></p>";


        echo "<hr>";


        // FLOATS
        echo "<br><h2>Variáveis com Floats (números decimais)</h2>";

        $variavelFloat01 = 0.5;
        echo "<p><span style='color:blue;'>\$variavelFloat01 = 0.5;<br>";
        echo "echo \$variavelFloat01</span><br>Retorna: <b>" . $variavelFloat01 . "</b></p>";

        $variavelFloat02 = 100.01;
        echo "<p><span style='color:blue;'>\$variavelFloat02 = 100.01;<br>";
        echo "echo \$variavelFloat02</span><br>Retorna: <b>" . $variavelFloat02 . "</b></p>";

        $variavelFloat03 = -50.99;
        echo "<p><span style='color:blue;'>\$variavelFloat03 = -50.99;<br>";
        echo "echo \$variavelFloat03</span><br>Retorna: <b>" . $variavelFloat03 . "</b></p>";


        echo "<hr>";


        // BOOLEANOS
        echo "<br><h2>Variáveis com Booleanos (verdadeiro/falso)</h2>";

        $variavelBooleana01 = true;
        echo "<p><span style='color:blue;'>\$variavelBooleana01 = true;<br>";
        echo "echo \$variavelBooleana01</span><br>Retorna: <b>" . $variavelBooleana01 . "</b></p>";

        $variavelBooleana02 = false;
        echo "<p><span style='color:blue;'>\$variavelBooleana02 = false;<br>";
        echo "echo \$variavelBooleana02</span><br>Retorna: <b>" . $variavelBooleana02 . "</b><br><b>Obs.: o retorno fica vazio pois é 0 ou false.</b></p>";


        echo "<hr>";


        // ARRAYS
        echo "<br><h2>Variáveis com Arrays ('conjuntos')</h2>";

        $variavelArraySimples = [0,1,2,3,"quatro","cinco"];
        echo "<p><span style='color:blue;'>\$variavelArraySimples = [0,1,2,3,\"quatro\",\"cinco\"];<br>";
        echo "<span style='color:blue;'>var_dump( \$variavelArraySimples );</span></p>Retorna: <b><pre>";
        var_dump($variavelArraySimples);
        echo "</pre></b>";

        $variavelArrayAssociativo = ["nome" => "Fulano", "sobrenome" => "da Silva", "idade" => 33];
        echo "<p><span style='color:blue;'>\$variavelArrayAssociativo = [\"nome\" => \"Fulano\", \"sobrenome\" => \"da Silva\", \"idade\" => 33];<br>";
        echo "<span style='color:blue;'>var_dump( \$variavelArrayAssociativo );</span></p>Retorna: <b><pre>";
        var_dump($variavelArrayAssociativo);
        echo "</pre></b>";

        echo "<p><b>Observação: o <i>echo</i> não funciona da maneira esperada com arrays (por isso usamos os loops),<br>mas para fins didáticos, vamos usar o <i>var_dump( )</i> (uma função nativa do PHP) para examinarmos o array.<br>Ainda, para o nosso <i>var_dump( )</i> ficar bonito, declaramos ele dentro de uma tag &lt;pre&gt;.</b></p>";

    ?>

</body>
</html>