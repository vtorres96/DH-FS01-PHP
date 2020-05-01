<?php

    require_once("./config/conexao.php");

    if(isset($_POST) && $_POST){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = $db->prepare("select * from usuarios where email = :email");

        $query->execute([
            ":email" => $email
        ]);

        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        if(!$usuario){
            $logado = false;
        } else {
            if(password_verify($senha, $usuario["senha"])){
                session_start();

                $_SESSION["logado"] = true;
                $_SESSION["id"] = $usuario["id"];
                $_SESSION["nome"] = $usuario["nome"];

                header("Location: usuarios.php");
            } else {
                $logado = false;
            }
        }

    }
?>
<?php $tituloPagina = "Formulário de Login"; ?>
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
                    <button type="submit" class="btn btn-primary" id="btnCadastrar">Cadastrar</button>
                    <div class="form-group">
                        <?php
                            if(isset($_POST) && $_POST){
                                if(!$logado){
                                    echo '<div class="col-md-6 mt-2 alert alert-danger">Usuário ou senha inválidos</div>';
                                }
                            }
                        ?>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <?php require_once("./inc/footer.php"); ?>