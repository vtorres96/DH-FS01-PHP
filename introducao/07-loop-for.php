<?php $titulo = "For | PHP"; ?>
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

    <br>
    <div>
        <img src="for.jpg" alt="Exemplo de For">
    </div>
    <br>

    <?php

        $arr = [0,1,2,3,4,5,6,7,8,9,10];
        echo "<p>\$arr = [0,1,2,3,4,5,6,7,8,9,10];</p>";

        $tabuadaDe = 3;
        echo "\$tabuadaDe = 3;";

        echo "<p><i>// for...</i></p>";

    ?>
    <p>
        <?php

            $arr = [0,1,2,3,4,5,6,7,8,9,10];
            $tabuadaDe = 3;

            for ( $i = 0; $i < count($arr); $i++ ) {

                echo $arr[$i] * $tabuadaDe . "<br>";

            }

        ?>
    </p>

    <h3>Vamos entender cada passo do for</h3>
    <ol>
        <li><b><i style="color: blue;">$i = 0;</i> | Declaramos uma variável que começa valendo 0 (pois o primeiro índice de um array é sempre 0);</b></li>
        <li><b><i style="color: blue;">$i < count($arr);</i> | Declaramos uma condição (valor de $i é menor que o comprimento do array, o número de itens do array). Enquanto essa condição for verdadeira, o loop continua*;</b></li>
        <li><b><i style="color: blue;">$i++</i> | A cada loop (ou rodada, giro), o $i ganha o valor de +1. Então ele vale 0, depois 1, 2, 3...;</b></li>
        <li><b>Quando a condição (segundo item) deixar de ser verdadeira, o loop deixa de rodar e o browser continua lendo o código depois do nosso loop.</b></li>
        <li><b><i style="color: blue;">$arr[$i]</i> | Quando declaramos essa parte, o $i tem seu valor alterado a cada 'giro', ou seja, é como se declarássemos $arr[0], $arr[1]... E por conta da nossa condição, nunca corremos o risco de passar o número de itens do array. =)</b></li>
    </ol>
    <p>* A função <b>count($arr)</b> recebe o parâmetro <b>$arr</b> - que é o nosso array -, e retorna o número de elementos que existem no array.</p>

</body>
</html>