<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

		<div id="content">
			<center>
			<h1>Entrar no sistema</h1>

			<form method="post" action="autentica.php">

			<input required="required" type="text" name="usuario" placeholder="login"><br/>
			<input required="required" type="password" name="pass" placeholder="senha"><br/>

			<center><input class="button button1" type="submit" value="Entrar"/></center>
                                    <center><input type="reset" value="Limpar"></center>
                                    </form>

                        <p>Você é aluno e não tem Cadastro?</p>
                        <a href="cadastrando.php" >
                        <button class="button button1" type="button">Cadastre-se agora</button> </a><br>
                       </center>

                        <?php

                        ?>
                        </div>

		<div id="sidebar">
			<aside>

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

			</aside>
		</div>
		<footer>
		<br><br><br><br>
			<a href="fale.php" title="Dúvidas, Sugestões e Reclamações">Fale Conosco</a>
		</footer>
	</div>
</body>
</html>
