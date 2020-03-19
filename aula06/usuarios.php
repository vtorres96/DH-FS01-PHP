<?php
    // obtendo conteudo do arquivo usuarios.json
    $usuarios = file_get_contents('./data/usuarios.json');

    // transformando o conteudo do arquivo usuarios.json em um array
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
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobreome</th>
                            <th scope="col">Email</th>
                            <th scope="col" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Percorrendo o array que contem a lista de usuarios -->
                        <?php foreach ($arrayUsuarios["usuarios"] as $usuario){ ?>
                            <tr>
                                <th scope="row"><?php echo $usuario["id"]; ?></th>
                                <td><?php echo $usuario["nome"] ?></td>
                                <td><?php echo $usuario["sobrenome"] ?></td>
                                <td><?php echo $usuario["email"] ?></td>
                                <td>
                                    <a href="edita-usuario.php?id=<?= $usuario["id"] ?>">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#modal<?= $usuario["id"] ?>">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                     <!-- Modal -->
                                    <div class="modal fade" id="modal<?= $usuario["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Deseja realmente excluir ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Usuário: <?= $usuario["nome"] ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <a href="index.php?id=<?= $usuario["id"] ?>">
                                                        <button type="button" class="btn btn-danger">Excluir</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
        </article>
    </main>
    <?php require_once("./inc/footer.php"); ?>