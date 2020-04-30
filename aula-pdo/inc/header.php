<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    } 
    if($_SESSION){
        $id = $_SESSION["id"];
        $nome = $_SESSION["nome"];
    }
?>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.php">JSON PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if($_SESSION): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="">Olá, <?= $nome; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./usuarios.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Sair <span class="sr-only">(current)</span></a>
                    </li>
                <?php else: ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Cadastro <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        </nav>
    </header>