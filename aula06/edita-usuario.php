<?php

    // seleciona o ator
    if (isset($_GET) && $_GET && $_GET["id"]) {

        // obtendo conteudo do arquivo usuarios.json
        $usuarios = file_get_contents('./data/usuarios.json');

        // transformando o conteudo do arquivo usuarios.json em um array
        $arrayUsuarios = json_decode($usuarios, true);

        $usuarioEncontrado = [];
        
        // Percorrendo o array que contem a lista de usuarios
        foreach ($arrayUsuarios["usuarios"] as $usuario) {
        
            if($usuario["id"] == $_GET["id"]){
                array_push($usuarioEncontrado, $usuario);
            }
            
        }

    }

    if(isset($_POST) && $_POST){

        // recebendo as informacoes enviadas atraves do formulario 
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // obtendo conteudo do arquivo usuarios.json
        $usuarios = file_get_contents('./data/usuarios.json');

        // transformando o conteudo do arquivo usuarios.json em um array
        $arrayUsuarios = json_decode($usuarios, true);
    
        // Percorrendo o array que contem a lista de usuarios
        foreach ($arrayUsuarios["usuarios"] as $chave => $usuario) {

            if($usuario["id"] == $id){
                
                $arrayUsuarios["usuarios"][$chave]["nome"] = $nome;
                $arrayUsuarios["usuarios"][$chave]["sobrenome"] = $sobrenome;
                $arrayUsuarios["usuarios"][$chave]["email"] = $email;
                $arrayUsuarios["usuarios"][$chave]["senha"] = password_hash($senha, PASSWORD_DEFAULT);

            }
            
        }

        $jsonUsuarios = json_encode($arrayUsuarios);

        $alterou = file_put_contents('./data/usuarios.json', $jsonUsuarios);
        
    }
    
?>

<?php $tituloPagina = "Formulário de Alteração de Cadastro"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="cadastroForm">
            <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
                <form action="edita-usuario.php" method="post">
                    <input type="hidden" class="form-control" id="id" name="id" 
                    value="<?= isset($_POST) ? $_POST["id"] : $_GET["id"] ?>" required>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($_POST) ? $_POST["nome"] : $usuarioEncontrado[0]["nome"] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= isset($_POST) ? $_POST["sobrenome"] : $usuarioEncontrado[0]["sobrenome"] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= isset($_POST) ? $_POST["email"] : $usuarioEncontrado[0]["email"] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnEditar">Editar</button>
                    <div class="form-group">
                        <?php
                            if(isset($_POST) && $_POST){
                                if($alterou){
                                    echo '<div class=" col-md-6 mt-2 alert alert-success">Usuário alterado com sucesso</div>';
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