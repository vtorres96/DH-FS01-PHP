<?php $titulo = "Foreach | PHP"; ?>
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
        <img src="foreach.jpg" alt="Exemplo de Foreach">
    </div>
    <br>

    <?php

        $arr = [0,1,2,3,4,5,6,7,8,9,10];
        echo "<p>\$arr = [0,1,2,3,4,5,6,7,8,9,10];</p><p><i>// foreach...</i></p>";

        $tabuadaDe = 3;
        echo "\$tabuadaDe = 3;";

    ?>
    <p>
        <?php

            $arr = [0,1,2,3,4,5,6,7,8,9,10];
            $tabuadaDe = 3;

            foreach ( $arr as $item ) {

                echo $item * $tabuadaDe . "<br>";

            }
        ?>
    </p>


    <hr>


    <h2>Bônus | Misturando PHP com HTML em uma Tabela com um foreach aninhado em outro</h2>

    <br>
    <div>
        <img src="foreach-tabuada.jpg" alt="Exemplo de Foreach">
    </div>
    <br>

    <style>
        table { width:100%;border: 1px solid darkgrey; }
        tr, th, td { border: 1px solid grey;text-align: center;padding: 15px;background-color: #f2f2f2; }
        th { background-color: lightgrey; }
    </style>

    <?php $nums = [0,1,2,3,4,5,6,7,8,9,10]; ?>

    <table>
        <tr>
            <?php foreach ( $nums as $theader ) { ?>
                <th><b>X x <?= $theader ?></b></th>
            <?php } ?>
        </tr>
        <?php foreach ( $nums as $itemNivel1 ) : ?>
            <tr>
                <?php foreach ($nums as $itemNivel2 ): ?>
                    <td><?= $itemNivel1 . " x " . $itemNivel2 . " = " . $itemNivel1 * $itemNivel2 ; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
   
</body>
</html>