<?php
    $usuarios = file_get_contents('./data/usuarios.json');

    $arrayUsuarios = json_decode($usuarios, true);
?>
<?php $tituloPagina = "Lista de Usuários"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
    <main class="container">
        <article class="row">
            <section class="col-12 mx-auto bg-light my-5 py-5 rounded border" id="usuariosTb">
                <h3 class="col-12 text-center my-3"><?= $tituloPagina ?></h3>
                <table class="table my-5">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($arrayUsuarios["usuarios"] as $usuario){ ?>
                            <tr>
                                <th scope="row"><?php echo $usuario["nome"]; ?></th>
                                <td><?php echo $usuario["email"] ?></td>
                                <td><?php echo $usuario["senha"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
        </article>
    </main>
    <?php require_once("./inc/footer.php"); ?>