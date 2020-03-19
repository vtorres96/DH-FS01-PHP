<?php $titulo = "Switch | PHP"; ?>
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
        <img src="switch.jpg" alt="Exemplo de Switch">
    </div>
    <br>

    <?php
        $genero = 'Masculino';
        echo "<p>\$genero = 'Masculino'</p><p><i>// switch...</i></p>";
    ?>
    <p>
        <?php
            switch ( $genero ) {
                case "Masculino":
                    echo "É do gênero masculino";
                    break;
                case "Feminino":
                    echo "É do gênero feminino";
                    break;
                default:
                    echo "Prefere não dizer";
                    break;
            }
        ?>
    </p>


    <hr>


    <?php
        $genero = 'Feminino';
        echo "<p>\$genero = 'Feminino'</p><p><i>// switch...</i></p>";
    ?>
    <p>
        <?php
            switch ( $genero ) {
                case "Masculino":
                    echo "É do gênero masculino";
                    break;
                case "Feminino":
                    echo "É do gênero feminino";
                    break;
                default:
                    echo "Prefere não dizer";
                    break;
            }
        ?>
    </p>


    <hr>


    <?php
        $genero = 'Qualquer outro valor';
        echo "<p>\$genero = 'Qualquer outro valor'</p><p><i>// switch...</i></p>";
    ?>
    <p>
        <?php
            switch ( $genero ) {
                case "Masculino":
                    echo "É do gênero masculino";
                    break;
                case "Feminino":
                    echo "É do gênero feminino";
                    break;
                default:
                    echo "Prefere não dizer";
                    break;
            }
        ?>
    </p>

   </body>
</html>