<!DOCTYPE html>
<html lang="pt-br"><!-- idioma site -->
	<head>
		<meta charset="utf-8"><!-- codificação caracteres-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- indica para o navegador utilizar a versão mais moderna do IE -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- define largura do conteudo e zoom inicial -->

		<title>site para salao</title><!-- titulo -->
		<meta name="description" content=""><!-- descrição até 156 caracteres-->
		<meta name="robots" content="index, follow"><!-- indexação mecanismos de busca -->
		<link rel="shortcut icon" href=""><!-- icone aba navegador-->
		<link rel="alternate" type="application/rss+xml" title="RSS/Feed" href="rss.xml"><!-- feed -->

		<link rel="stylesheet" href="css/style.css"><!-- folha estilo principal - classes com underline-->
		<link rel="stylesheet" href="https://necolas.github.io/normalize.css/7.0.0/normalize.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap css - classes com traço-->

		<script src="js/jquery.min.js"></script><!-- bootstrap jquery -->
		<script src="js/bootstrap.min.js"></script><!-- bootstrap javascript -->
		<!-- script para rodar html5 no IE9 e anteriores -->
			<!--[if lt IE 9]>
				<script src="js/html5shiv.js"></script>
			<![endif]-->

		<!-- script para aparecer tooltip do bootstrap -->
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>

		<!-- script para aparecer popover do bootstrap -->
		<script>
			$(document).ready(function(){
				$('[data-toggle="popover"]').popover();
			});
		</script>
	</head>
	<body>
		<!-- nav -->
		<div class="container-fluid">
				<div class="row ">
					<div class="col-md-12" style="height: 50px;">
						<nav class="navbar navbar-default navbar-fixed-top">
							<div class="container">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Salão de beleza</a>
								</div><!-- navbar-header -->
								<div class="collapse navbar-collapse" id="myNavbar">
									<ul class="nav navbar-nav">
										<li class="active"><a href="#">Início</a></li>
										<li><a href="#">Quem somos</a></li>
										<li><a href="#">Serviços</a></li>
										<li><a href="#">Novidades</a></li>
										<li><a href="#">Contato</a></li>
									</ul>
								</div><!-- collapse -->
							</div><!-- container -->
						</nav><!-- nav -->
					</div><!-- col -->
				</div><!-- row -->
		</div><!-- container-fluid -->
		<!-- carousel -->
		<div class="container-fluid">
			<div class="row">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="images/ed_2_3.jpg" alt="Los Angeles">
							</div>
							<div class="item">
								<img src="images/ed_2_3.jpg" alt="Chicago">
							</div>
							<div class="item">
								<img src="images/ed_2_3.jpg" alt="New york">
							</div>
						</div>
					</div><!-- myCarousel -->
			</div><!-- row -->
		</div><!-- container-fluid -->
		<!-- faixa abaixo carousel -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center main_faixa">
					<h1 style="margin-bottom: 0; margin-top: 0;">O lugar ideal para cuidar da sua beleza.</h1>
					<p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div><!-- container-fluid -->
		<!-- content -->
		<div class="container main_content main_margin">
			<div class="row">
				<div class="col-sm-6">
					<h4><b>Alguns dos nossos serviços:</b></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a pulvinar dui, a dignissim augue. Aliquam dui velit, vulputate non diam id, efficitur auctor augue.</p>
					<div class="row">
						<div class="col-sm-6">
							<ul>
								<li>1</li>
								<li>2</li>
								<li>3</li>
								<li>4</li>
								<li>5</li>
							</ul>
						</div><!-- col-sm-6 -->
						<div class="col-sm-6">
							<ul>
								<li>6</li>
								<li>7</li>
								<li>8</li>
								<li>9</li>
								<li>10</li>
							</ul>
						</div><!-- col-sm-6 -->
					</div><!-- row -->
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-4">
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
						</div>
						<div class="col-sm-4">
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
						</div>
						<div class="col-sm-4">
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
							<div class="col-md-4"><img class="img-responsive" src="images/1 (1).jpg" alt=""></div>
						</div>
					</div><!-- row -->
				</div><!-- col-sm-6 -->
			</div><!-- row -->
		</div>
		<!-- footer -->
		<footer class="container-fluid main_margin">
			<div class="row">
				<div class="col-sm-6">
					<h4><b>Redes sociais</b></h4>
					<img src="images/icones_redes_sociais.png" width="300" height="60">
				</div>
				<!-- <div class="clearfix visible-xs-block"></div> -->
				<div class="col-sm-6">
					<h4><b>Atendimento</b></h4>
					<p>SEG à SAB - 10h - 19h</p>
					<p>contato@salaodebeleza.com.br</p>
					<p>Tel: 11 2345-6789</p>
					<p>Rua Lorem Ipsum. 2334 - Santos, SP</p>
				</div>
			</div><!-- row -->
		</footer>
	</body>
</html>