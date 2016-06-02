<!DOCTYPE html>
<html>
<head>
	<title>Registrando Atividade</title>
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	<link rel="shortcut icon" href="img/favicon.ico">

	<META name="ifal" content="Site finculado ao Instituto Federal de Alagoas"/>
	<META name="keywords" content="Eventos em Maceió"/>
	<META name="author" content="estudantes SI 3° Período"/>
</head>
<body>
	<div id="superior">
		<center><img src="img/ifal.png"></center>
	</div>
	<div id="wrap">

		<header>
			<h3>Seja bem Vindo</h3>
		<nav>

		</nav>
		</header>

		<a href="home_c_c.php">Painel inicial</a><br/>
		<div id="content">
			<article>

<form method="post" action="reg_ativ_realiza.php">

		<!-- FORMULARIO DE Atividades -->

<input type="text" name="atividade" placeholder="Atividade" required="required"><br/>

<input type="number" name="cargahoraria" placeholder="Carga Horária Atividade" required="required"><br/>

<input class="button button1" type="submit" name="enviar" value="Registrar Atividade">

<input type="reset" name="limpar" value="Limpar">

</form>

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


		</footer>
	</div>
</body>
</html>
