<?php

    require_once("./classes/imc.php");

    if(isset($_POST) && $_POST){
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = new IndiceMassaCorporal();

        $imc->pesoProp = $peso;
        $imc->alturaProp = $altura;

        $massaCorporal = $imc->calculaMassaCorporal();
        $situacaoPeso = $imc->situacaoPeso();
    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital House</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <form class="" action="" method="post">
    <div class="form-row">
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="peso">Peso</label>
            <input type="text" class="form-control" name="peso" id="peso">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="altura">Altura</label>
            <input type="text" class="form-control" name="altura" id="altura">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </form>
    <?php if(isset($_POST) && $_POST):
        if($massaCorporal && $situacaoPeso): ?>
            <div class="col-md-12">
                <div class="col-md-2 alert alert-success">
                    <p><?= "O seu índice de massa corporal é: " . number_format($massaCorporal, 2) ?></p>
                    <p><?= "A situação do seu peso é: " . $situacaoPeso ?></p>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
  </body>
</html>