<?php $titulo = "If Else | PHP"; ?>
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
        <img src="ifelse.jpg" alt="Exemplo de If Else">
    </div>
    <br>

    <?php
        $idade = 10;
        echo "<p>\$idade = 10</p><p><i>// if/else...</i></p>";
    ?>
    <p>
        <?php
            if( ( $idade >= 16 && $idade < 18 ) || $idade > 70 ) {
                
                echo "Voto Facultativo";

            } else if( $idade < 16 ) {
                
                echo "Voto Não Permitido";
            
            } else {

                echo "Voto Obrigatório";

            }
        ?>
    </p>


    <hr>


    <?php
        $idade = 100;
        echo "<p>\$idade = 100</p><p><i>// if/else...</i></p>";
    ?>
    <p>
        <?php
            if( ( $idade >= 16 && $idade < 18 ) || $idade > 70 ) {
                
                echo "Voto Facultativo";

            } else if( $idade < 16 ) {
                
                echo "Voto Não Permitido";
            
            } else {

                echo "Voto Obrigatório";

            }
        ?>
    </p>


    <hr>


    <?php
        $idade = 50;
        echo "<p>\$idade = 50</p><p><i>// if/else...</i></p>";
    ?>
    <p>
        <?php
            if( ( $idade >= 16 && $idade < 18 ) || $idade > 70 ) {
                
                echo "Voto Facultativo";

            } else if( $idade < 16 ) {
                
                echo "Voto Não Permitido";
            
            } else {

                echo "Voto Obrigatório";

            }
        ?>
    </p>


    <hr>


    <?php
        $idade = 16;
        echo "<p>\$idade = 16</p><p><i>// if/else...</i></p>";
    ?>
    <p>
        <?php
                if( ( $idade >= 16 && $idade < 18 ) || $idade > 70 ) {
                
                echo "Voto Facultativo";

            } else if( $idade < 16 ) {
                
                echo "Voto Não Permitido";
            
            } else {

                echo "Voto Obrigatório";

            }
        ?>
    </p>

   </body>
</html>
