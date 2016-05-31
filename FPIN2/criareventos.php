<!DOCTYPE html>
<html>
<head>
	<title></title>
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
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
			<h3>Seja bem Vindo</h3>
		<nav>

		</nav>
		</header>

		<a href="home_c_e.php">Painel inicial</a><br/>
		<div id="content">
			<article>

		<form method="post" action="evento_realizado.php">

		<!-- FORMULARIO DE CRIAÇÃO DE EVENTOS -->

	      <p><input type="text" name="nomeevento" placeholder="Nome do Evento" required="required"></p>

	      <p><input type="text" name="localevento" placeholder="Local" required="required"><p>

	      <p>Layout do Evento<input  nome="foto" type="file"></p>

	      <p>Data <input type="date" name="data" id="data" placeholder="Date" required="required"></p>

	       <textarea name="descricao" rows"15" cols"125" placeholder="Descrição" required="required"></textarea>

	       <p><input class="button button1" type="submit" name="enviar" value="enviar">
	       <input type="reset" name="limpar" value="Limpar"></p>
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
