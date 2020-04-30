<?php

    require_once("./config/conexao.php");

    if(isset($_POST) && $_POST){

        // recebendo as informacoes enviadas atraves do formulario 
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    }
?>

<?php $tituloPagina = "Formulário de Cadastro"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
                <form action="index.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Concordo com os termos
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnCadastrar">Cadastrar</button>
                    <div class="form-group">
                        <?php
                            if(isset($_POST) && $_POST){
                                if($cadastrou){
                                    echo '<div class="col-md-6 mt-2 alert alert-success">Usuário cadastrado com sucesso</div>';
                                } else {
                                    echo '<div class="col-md-6 mt-2 alert alert-danger">Falha ao processar requisição</div>';
                                }
                            }
                        ?>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <?php require_once("./inc/footer.php"); ?>