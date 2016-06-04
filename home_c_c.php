<?php
include ('conecta_banco.php');
?>

<?php
include ('start.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<META charset="UTF-8"/ >
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	<link rel="shortcut icon" href="img/favicon.ico">

	<META name="ifal" content="Site finculado ao Instituto Federal de Alagoas"/>
	<META name="keywords" content="Eventos em Maceió"/>
	<META name="author" content="estudantes SI 3° Período"/>
</head>
<body>
	<div id="superior">
		<center><img src="img/ifal.png"; ></center>
	</div>
	<div id="wrap">

		<header>
			<?php
                		echo '<h3>Seja bem vindo Senhor(a) Coordenador de Curso ' . htmlspecialchars($_SESSION["usuario"]) . '!</h>';
           			?>
			<nav>
				<ul>
					<li><a href="registrar_atividade.php">Registrar Atividades</a></li>
					<li><a href="visualizar_atividade.php">Visualizar Atividades</a></li>
					<li><a href="info_part_ause2.php">Validar Atividades</a></li>
					<li><a href="gerarelatorio.php">Gerar Relatório</a></li>
					<li><a href="logout.php">Sair do Sistema</a></li>
				</ul>
			</nav>
		</header>
		<div id="content">
			<article>
			<?php

			?>
			</article>
		</div>
		<div id="sidebar">
			<aside>
				<ul>

				<center>Eventos
				<a href="http://cssday.io" target="_blank">
				 <img src="http://www.divyweb.com/site/uploads/2015/12/cssdayio-logo-620x269.png"
				width="130" align="_center" title="click para saber mais">
				</a>


				<a href="http://javaman.io" target="_blank">
				<img src="http://harrisgray.files.wordpress.com/2013/09/java-man-tour-banner1.png"
				width="130" align="_center" title="click para saber mais">
				</a>

				<a href="http://developer.io" target="_blank">
				<img src="http://www.mattosdesign.com/wallpapers/imagens/wallpaper_developer_blue.jpg"
				width="130" align="_center" title="click para saber mais">
				</a></center>

				</ul>
			</aside>
		</div>
		<br><br><br><br><br><br>
		<footer>

<a href="fale.php">Fale Conosco</a>

		</footer>
	</div>
</body>
</html>
