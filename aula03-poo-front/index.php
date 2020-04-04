<?php
    // require_once("./classes/Mamifero.php");
    require_once("./classes/Cachorro.php");
    // require_once("./classes/Ave.php");
    require_once("./classes/Arara.php");
    // require_once("./classes/Peixe.php");
    require_once("./classes/Tilapia.php");
    // require_once("./classes/Reptil.php");
    require_once("./classes/Tartaruga.php");
?>
<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<title>Polimorfismo (e Sobrecarga de Métodos)</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=5, shrink-to-fit=no">
	<meta http-equiv="Cache-control" content="public">
	<meta name="title" content="POO | Polimorfismo">
	<meta name="description" content="POO | Polimorfismo e Sobrecarga de Métodos">
	<meta name="revisit-after" content="30 days">
	<meta name="identifier-URL" content="https://djament.com.br/estudos/poo-polimorfismo/index.php">
	<meta name="abstract" content="POO | Polimorfismo">
	<meta name="author" content="Marcelo Diament, Djament Comunicação">
	<meta name="robots" content="index,follow">
	<meta name="contact" content="contato@djament.com.br">
	<meta name="reply-to" content="contato@djament.com.br">
	<meta name="copyright" content="Djament">
	<meta name="rating" content="general">
	<meta name="web_author" content="Djament Comunicação">
	<meta name="theme-color" content="#000000">
	<meta property="og:site_name" content="Djament | POO | Polimorfismo">
	<meta property="og:title" content="POO | Polimorfismo">
	<meta property="og:description" content="POO | Polimorfismo e Sobrecarga de Métodos">
	<meta property="og:url" content="https://djament.com.br/estudos/poo-polimorfismo/index.php">
	<meta property="og:locale" content="pt-BR">
	<meta name="og:locality" content="São Paulo">
	<meta name="og:region" content="SP">
	<meta name="og:country-name" content="BR">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://djament.com.br/img/logo-fardas-guara.png">
	<meta property="og:image:alt" content="Djament | Desenvolvimento de Sites">
	<meta property="og:image:url" content="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png">
	<meta property="og:image:type" content="img/png">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Biblioteca Teste">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="shortcut icon" sizes="60x60" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png">
	<link rel="icon" type="image/png" sizes="60x60" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png">	
	<link rel="canonical" href="https://djament.com.br/estudos/poo-polimorfismo">
	<meta name="keywords" content="php, poo, orientação à objetos, programação orientada à objetos, desenvolvimento web">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-vlOMx0hKjUCl4WzuhIhSNZSm2yQCaf0mOU1hEDK/iztH3gU4v5NMmJln9273A6Jz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<header class="container">
		<section class="row">
			<article class="col-12">
				<div id="logo3D" class="desktop-only col-12"><a id="cube" href="https://br.digitalhouse.com" title="Digital House Brasil" alt="Digital House Brasil" rel="external" target="_blank">
					<img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="60px" width="60px" id="back" alt="Digital House" title="Digital House"></a>
				</div>
			</article>
			<article class="col-12">
				<h1>Polimorfismo e Sobrecarga de Métodos</h1>
				<!-- <a href="https://github.com/Marcelo-Diament/poo-revisao" target="_blank" title="Acesse o repositório para ver os códigos em PHP" rel="noreferrer"><i class="fab fa-github"></i></a></h1> -->
			</article>
		</section>
	</header>
	<main class="container">
		<section class="row">

			<!-- ### OBJETO DA CLASSE MAMÍFERO ### -->
			<!-- A classe extende a classe abstrata Animal, onde as funções são declaradas mas não são definidas -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/mamiferos.png" alt="Classe Mamífero">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe Mamífero</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Mamífero é extensão da classe Abstrata Animal</h6>
					</div>
					<div class="card-header">
						<p>Métodos da Aplicados ao Objeto</p>
					</div>
					<ul class="list-group list-group-flush">
						<?php
							// Instanciando um objeto a partir da classe Mamífero.
							$mamifero = new Mamifero();
							$mamifero->locomover();
							$mamifero->alimentar();
							$mamifero->emitirSom();
							$mamifero->setCorDePelos("branco");

							echo "<li class='list-group-item'>Cor de pelo: ".$mamifero->getCorDePelos()."</li>";
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE MAMÍFERO ### -->

			<!-- ### OBJETO DA CLASSE CACHORRO ### -->
			<!-- A classe extende a classe Mamífero, onde herdando seus métodos e propriedades -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/cachorros.png" alt="Classe Cachorro">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe Cachorro</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Cachorro é extensão da classe Mamífero</h6>
					</div>
					<div class="card-header">
						<p>Métodos da Aplicados ao Objeto</p>
					</div>
					<ul class="list-group list-group-flush">
						<?php
							// Instanciando um objeto a partir da classe Cachorro.
							$cachorro = new Cachorro();
							$cachorro->locomover();
							$mamifero->alimentar();
							$mamifero->emitirSom();
							$mamifero->setCorDePelos("branco");

							echo "<li class='list-group-item'>Cor de pelo: ".$cachorro->getCorDePelos()."</li>";

							$cachorro->roerOsso();
						?>
					</ul>
			</article>
			<!-- ### OBJETO DA CLASSE CACHORRO ### -->

			<!-- ### OBJETO DA CLASSE AVE ### -->
			<!-- A classe extende a classe abstrata Animal, onde as funções são declaradas mas não são definidas -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/aves.png" alt="Classe Ave">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe Ave</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Ave é extensão da classe Abstrata Animal</h6>
					</div>
					<div class="card-header">
						<p>Métodos da Aplicados ao Objeto</p>
					</div>
					<ul class="list-group list-group-flush">
						<?php
							// Instanciando um objeto a partir da classe Ave
							$ave = new Ave();
							$ave->locomover();
							$ave->alimentar();
							$ave->emitirSom();
							$ave->setCorDePenas("vermelhas");

							echo "<li class='list-group-item'>Cor de penas: ".$ave->getCorDePenas()."</li>";
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE AVE ### -->

			<!-- ### OBJETO DA CLASSE ARARA ### -->
			<!-- A classe extende a classe Ave, onde herdando seus métodos e propriedades -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/araras.png" alt="Classe Arara">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe Arara</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Arara é extensão da classe Ave</h6>
					</div>
					<div class="card-header">
						<p>Métodos da Aplicados ao Objeto</p>
					</div>
					<ul class="list-group list-group-flush">
						<?php
							// Instanciando um objeto a partir da classe Arara
							$arara = new Arara();
							$arara->locomover();
							$arara->alimentar();
							$arara->emitirSom();
							$arara->bicar();
							$arara->setCorDePenas("vermelhas");

							echo "<li class='list-group-item'>Cor de penas: ".$arara->getCorDePenas()."</li>";
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE ARARA ### -->

			<!-- ### OBJETO DA CLASSE PEIXE ### -->
			<!-- A classe extende a classe abstrata Animal, onde as funções são declaradas mas não são definidas -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/peixes.png" alt="Classe Peixe">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe Peixe</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Peixe é extensão da classe Abstrata Animal</h6>
					</div>
					<div class="card-header">
						<p>Métodos da Aplicados ao Objeto</p>
					</div>
					<ul class="list-group list-group-flush">
						<?php
							// Instanciando um objeto a partir da classe Peixe
							$peixe = new Peixe();
							$peixe->locomover();
							$peixe->alimentar();
							$peixe->emitirSom();
							$peixe->setCorDeEscamas("prata");

							echo "<li class='list-group-item'>Cor de escamas: ".$peixe->getCorDeEscamas()."</li>";
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE PEIXE ### -->

			<!-- ### OBJETO DA CLASSE TILÁPIA ### -->
			<!-- A classe extende a classe Peixe, onde herdando seus métodos e propriedades -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/tilapia.png" alt="Classe Tilápia">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe Tilápia</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Tilápia é extensão da classe Peixe</h6>
					</div>
					<div class="card-header">
						<p>Métodos da Aplicados ao Objeto</p>
					</div>
					<ul class="list-group list-group-flush">
						<?php
							// Instanciando um objeto a partir da classe Arara
							$tilapia = new Tilapia();
							$tilapia->locomover();
							$tilapia->alimentar();
							$tilapia->emitirSom();
							$tilapia->soltarBolhas();
							$tilapia->setCorDeEscamas("vermelhas");

							echo "<li class='list-group-item'>Cor de escamas: ".$tilapia->getCorDeEscamas()."</li>";
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE TILÁPIA ### -->

			<!-- ### OBJETO DA CLASSE RÉPTIL ### -->
			<!-- A classe extende a classe abstrata Animal, onde as funções são declaradas mas não são definidas -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/repteis.png" alt="Classe Réptil">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe Réptil</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Réptil é extensão da classe Abstrata Animal</h6>
					</div>
					<div class="card-header">
						<p>Métodos da Aplicados ao Objeto</p>
					</div>
					<ul class="list-group list-group-flush">
						<?php
							// Instanciando um objeto a partir da classe Réptil
							$reptil = new Reptil();
							$reptil->locomover();
							$reptil->alimentar();
							$reptil->emitirSom();
							$reptil->setCorDeCasco("verde");

							echo "<li class='list-group-item'>Cor de casco: ".$reptil->getCorDeCasco()."</li>";
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE RÉPTIL ### -->

			<!-- ### OBJETO DA CLASSE TARTARUGA ### -->
			<!-- A classe extende a classe Réptil, onde herdando seus métodos e propriedades -->
			<article class="col-12 col-md-6">
				<div class="card text-center">
					<img class="card-img-top" src="assets/img/tartarugas.png" alt="Classe Tartaruga">
					<div class="card-body">
						<h4 class="card-title">Objeto criado a partir da classe Tartaruga</h4>
						<h6 class="card-subtitle mb-2 text-muted">A classe Tartaruga é extensão da classe Réptil</h6>
					</div>
					<div class="card-header">
						<p>Métodos da Aplicados ao Objeto</p>
					</div>
					<ul class="list-group list-group-flush">
						<?php
							// Instanciando um objeto a partir da classe Réptil
							$tartaruga = new Tartaruga();
							$tartaruga->locomover();
							$tartaruga->alimentar();
							$tartaruga->emitirSom();
							$tartaruga->lutar();
							$tartaruga->setCorDeCasco("vermelhas");

							echo "<li class='list-group-item'>Cor de casco: ".$tartaruga->getCorDeCasco()."</li>";
						?>
					</ul>
				</div>
			</article>
			<!-- ### OBJETO DA CLASSE TARTARUGA ### -->
		</section>
	</main>
	<footer></footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('article').after('<hr/>')
	</script>
</body>
</html>