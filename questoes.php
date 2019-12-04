<!DOCTYPE HTML>
<html>
<head>
<title>E-Learning</title>
<link rel="shortcut icon" href="favicon.png">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<noscript>
<link rel="stylesheet" href="css/5grid/core.css" />
<link rel="stylesheet" href="css/5grid/core-desktop.css" />
<link rel="stylesheet" href="css/5grid/core-1200px.css" />
<link rel="stylesheet" href="css/5grid/core-noscript.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style-desktop.css" />
<link rel="icon" href="css/favicon.png">
</noscript>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.openerWidth=52"></script>
</head><body class="onecolumn">
<div id="wrapper">
	<div id="header-wrapper">
		<header id="header">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="logo"> <!-- Logo -->
						<h1><a href="#" class="mobileUI-site-name">RJM E-Learning</a></h1>
					</div>
				</div>
			</div>
			<div class="5grid-layout">
				<div class="row">
					<div class="12u" id="menu">
						<div id="menu-wrapper">
							<nav class="mobileUI-site-nav">
								<ul>
									<li><a href="index.html">Homepage</a></li>
									<li><a href="video.html">Video Aula</a></li>
									<li class="current_page_item"><a href="questoes.php">Questões</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div id="page-wrapper" class="5grid-layout">
		<div class="row" id="content">
			<div class="12u">
				<section>
					<div class="post">
						<?php
						if(isset($_POST['q1']) || isset($_POST['q2']) || isset($_POST['q3'])){
							$nota = 0;
							if(isset($_POST['q1']) && $_POST['q1'] == "4")
								$nota = $nota + 1;
							if(isset($_POST['q2']) && $_POST['q2'] == "2")
								$nota = $nota + 1;
							if(isset($_POST['q3']) && $_POST['q3'] == "2")
								$nota = $nota + 1;
							
							if($nota == 0){
								echo <<<HDT
								<p>Você não acertou <strong>nenhuma</strong> questão, talvez precise estudar mais!<p>
HDT;								
							}else if($nota < 3){
								echo <<<HDT
								<p>Você acertou <strong>$nota de 3</strong> questões!<p>
HDT;								
							}else{
								echo <<<HDT
								<p>Parabéns, você acertou <strong>$nota de 3</strong> questões!<p>
HDT;
						}

						}else{
							echo <<<HDT
								<h2>Questões</h2>
								<form action="/plp/questoes.php" method="post">
									<p>Utilizar os princípios do SOLID fazem com que o software seja mais:</p>
									<input type="radio" name="q1" value="1"> Autônomo
									<input type="radio" name="q1" value="2"> Distinto
									<input type="radio" name="q1" value="3"> Útil
									<input type="radio" name="q1" value="4"> Manutenível
									<br><br>
									<p>No Single Responsibility Principle, uma classe é:</p>
									<input type="radio" name="q2" value="1"> Definida
									<input type="radio" name="q2" value="2"> Especializada
									<input type="radio" name="q2" value="3"> Simples
									<input type="radio" name="q2" value="4"> Dupla
									<br><br>
									<p>A violação do Single Responsibility Principle pode gerar:</p>
									<input type="radio" name="q3" value="1"> Alta manutenibilidade
									<input type="radio" name="q3" value="2"> Alto acoplamento
									<input type="radio" name="q3" value="3"> Boa coesão
									<input type="radio" name="q3" value="4"> Abstração
									<br><br><br>
									<input type="submit" value="Enviar">
								</form>	
HDT;							
						}
						?>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<div id="copyright" class="5grid-layout">
	<section>
		<p>&copy; RJM E-Learning</p>
	</section>
</div>
</body>
</html>