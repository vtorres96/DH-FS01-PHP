<?php

    // seleciona o usuario
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

            // verificando se encontramos o usuario apra fazer as alteracoes
            if($usuario["id"] == $id){
                
                $arrayUsuarios["usuarios"][$chave]["nome"] = $nome;
                $arrayUsuarios["usuarios"][$chave]["sobrenome"] = $sobrenome;
                $arrayUsuarios["usuarios"][$chave]["email"] = $email;

                // se o usuario nao enviar nada nao iremos alterar a senha
                // se o usuario enviar algo criptografamos a senha e efetuamos a alteracao
                if($senha != ""){
                    $arrayUsuarios["usuarios"][$chave]["senha"] = password_hash($senha, PASSWORD_DEFAULT);
                }

            }
            
        }

        // transformando o conteudo em uma string json
        $jsonUsuarios = json_encode($arrayUsuarios);

        // escrevendo conteudo no arquivo usuarios.json
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
                    value="<?= isset($_GET["id"]) ? $_GET["id"] : $_POST["id"]  ?>" required>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <!--
                                verifica dentro do value se existe id na URL que ira indicar que esta listando o usuario encontrado
                                caso nao encontre o parametro id na URL quer dizer que o formulario foi enviado atraves do metodo POST
                                e o usuario fez uma alteracao, portanto, iremos listar a informacao obtida atraves do envio do formulario
                                para conseguir exibir o valor que o usuario altera no campo nome apos clicar no botao Editar
                            -->
                            <input type="text" class="form-control" id="nome" name="nome" value="<?= isset($_GET["id"]) ? $usuarioEncontrado[0]["nome"] : $_POST["nome"] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sobrenome">Sobrenome</label>
                            <!--
                                verifica dentro do value se existe id na URL que ira indicar que esta listando o usuario encontrado
                                caso nao encontre o parametro id na URL quer dizer que o formulario foi enviado atraves do metodo POST
                                e o usuario fez uma alteracao, portanto, iremos listar a informacao obtida atraves do envio do formulario
                                para conseguir exibir o valor que o usuario altera no campo sobrenome apos clicar no botao Editar
                            -->
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= isset($_GET["id"]) ? $usuarioEncontrado[0]["sobrenome"] : $_POST["sobrenome"] ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <!--
                                verifica dentro do value se existe id na URL que ira indicar que esta listando o usuario encontrado
                                caso nao encontre o parametro id na URL quer dizer que o formulario foi enviado atraves do metodo POST
                                e o usuario fez uma alteracao, portanto, iremos listar a informacao obtida atraves do envio do formulario
                                para conseguir exibir o valor que o usuario altera no campo email apos clicar no botao Editar
                            -->
                            <input type="email" class="form-control" id="email" name="email" value="<?= isset($_GET["id"]) ? $usuarioEncontrado[0]["email"] : $_POST["email"] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="senha">Senha</label>                                             
                            <input type="password" class="form-control" id="senha" name="senha">
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