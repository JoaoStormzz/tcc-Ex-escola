<?php
	require_once '/admin/includes/init.php';
	include_once LIB_CONTROLLER.DS.'InstitucionalController.class.php';

	$controller = new InstitucionalController();
?>
<!DOCTYPE html>
<html>
<head>
	<title>..:: EEWBS ::..</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Site institucional da Escola Estadual Waldemir Barros da Silva" />
    <meta name="author" content="Marcelo Figueiredo Terenciani" />

    <link rel="shortcut icon" href="admin/imagens/menu/favicon.png" type="image/png">

	<!-- Bootstrap core CSS -->
    <link href="admin/components/bootstrap-4.0.1/css/bootstrap.min.css" rel="stylesheet">
	
	<!--FontAwesome-->
	<link rel="stylesheet" href="admin/components/font-awesome-4.7.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="admin/components/fancybox-master/jquery.fancybox.min.css" media="screen" />

	<!-- CSS padrao -->
	<link rel="stylesheet" href="css/estilo.css" />
	<link rel="stylesheet" href="css/queries.css" />
</head>
<body>
	<?php
		include_once 'includes/menu.php';
	?>
	<nav class="navbar navbar-expand-lg navbar-light py-lg-4 menu-escola">
		<div class="container">
			<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.html">EEWBS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="index.php">HOME</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded active" href="institucional.php">INSTITUCIONAL</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="profissional.php">EDUCAÇÃO PROFISSIONAL</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="equipe.php">EQUIPE WBS</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="noticias.php">NOTÍCIAS</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="contato.php">CONTATO</a>
					</li>
				</ul>
			</div>
		</div>
	</nav> <!--MenuEscola-->
	<div class="container">
		<?php 
			$instituicao = $controller->getInstituicao();

		?>
		<h6 class="navegacao">Você está em: Institucional</h6>
		<div class="institucional border-gray">
			<h1 class="div-label">Nossa Missão</h1>

			<div class="texto-institucional">
				<?=$instituicao->getMissao()?>
			</div>
		</div>
		<div class="institucional border-gray">
			<h1 class="div-label">Nossa Visão</h1>
			<div class="texto-institucional">
				<?=$instituicao->getVisao()?>
			</div>
		</div>	
		<div class="institucional border-gray">
			<h1 class="div-label">Nossos Valores</h1>
			<div class="texto-institucional">
				<?=$instituicao->getValores()?>
			</div>
		</div>
		
		<div class="institucional border-gray">
			<h1 class="div-label">Conheça Nossa História</h1>
			<div class="texto-institucional historico">	
				<?=$instituicao->getHistorico()?>

				<p class="alteracao"> Texto alterado em: <?=$instituicao->getData()?> </p>
			</div>
		</div>
	</div>
	<footer class="rodape rodape-institucional">
		<div class="container">
			<h6 class="texto-rodape">www.eewbs.com.br © 2017 - Todos os direitos reservados</h6>
		</div>
	</footer><!--rodape-->


	<!-- Bootstrap core JavaScript -->
    <script src="admin/components/jquery/jquery-3.2.1.min.js"></script>
    <script src="admin/components/popper/popper.min.js"></script>
    <script src="admin/components/bootstrap-4.0.1/js/bootstrap.min.js"></script>
</body>
</html>