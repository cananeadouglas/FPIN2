<!DOCTYPE html>
<html>
<head>
	<title>Inscrição em Evento</title>
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
	<link rel="stylesheet" type="text/css" href="../css/css.css"/>
	<link rel="shortcut icon" href="../img/favicon.ico">

	<META name="ifal" content="Site finculado ao Instituto Federal de Alagoas"/>
	<META name="keywords" content="Eventos em Maceió"/>
	<META name="author" content="estudantes SI 3° Período"/>
</head>
<body>
	<div id="superior">
		<center><img src="../img/ifal.png"; ></center>
	</div>
	<div id="wrap">

		<header>
			<h3>Seja bem Vindo</h3>
			<nav>
				<ul>
					<li><a href="../home_aluno.php" title="Voltar Page">Painel Inicial</a></li>
				</ul>
			</nav>
		</header>
		<div id="content">
			<article>

<!-- ----------------------------------------------------------------------------------------  -->

<form action="#" method="post" ecntype="">

		Inscrição Evento<br/>

		<input placeholder="Digite seu nome" required="required" type="text" name="nome">


      <p>Qual é o seu Curso?<br>
      <select type="selected" name="curso" value="selecione" required="required">
            <option>Sistemas de Informação</option>
            <option>Letras</option>
            <option>Matemática</option>

      </select> </p>

		<p><label>Selecione o evento que deseja partipar?</label> <br>
      <select type="selected" required="required" value="selecione"  name="evento">
            <option>Evento CSS_Day</option>
            <option>Evento Java_Man</option>
            <option>Evento Developer</option>

      </select></p>

      <input class="button button1" type="submit" value="Fazer Inscrição">


 </form>

<!-- ----------------------------------------------------------------------------------------  php em baixo  -->

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
