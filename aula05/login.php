<?php
    if(isset($_POST) && $_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // obtendo conteudo do arquivo usuarios.json
        $usuarios = file_get_contents('./data/usuarios.json');

        // transformando o conteudo do arquivo usuarios.json em um array
        $arrayUsuarios = json_decode($usuarios, true);

        // Percorrendo o array que contem a lista de usuarios
       foreach ($arrayUsuarios["usuarios"] as $usuario) {
           
           if($email == $usuario["email"]){
                if(password_verify($senha, $usuario["senha"])){
                    echo "usuário autenticado";
                    break;
                }
           }
           
        }
       die;
    }
?>
<?php $tituloPagina = "Formluário de Login"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
                <form action="login.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" id="btnCadastrar">Cadastrar</button>
                </form>
            </section>
        </article>
    </main>
    <?php require_once("./inc/footer.php"); ?>