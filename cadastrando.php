<html>
<head>
	<title>Cadastro</title>
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
			<h3>Faça seu cadastro</h3>
		</header>
		<div id="content">

<form method="post" action="cadastro_realizado.php" enctype="multipart/form-data">

    <input type="text" name="nome" placeholder="Nome Completo" required="requerid" /><br/>
    <input type="number" name="idade" placeholder="Idade" required="requerid" min="8" max="105" /><br/>
    <input type="text" name="usuario" placeholder="Usuario / Login"required="requerid" /><br/>
    <input type="email" name="email" placeholder="Email"required="requerid" /><br/>
    <input type="password" name="pass" placeholder="Senha"required="requerid" /><br/>

        <p>Selecione seu Sexo:
        <label for="sexo1" >
        <input name="sexo" required="required" value="masc" id="sexo1" type="radio">Masculino</label>
        <label for="sexo2" >
        <input name="sexo" required="required" value="femi" id="sexo2" type="radio">Feminino</label>
        </p>

        <p>Selecione o Curso:<br/>
        <select required="required" name="curso">
            <option selected="selected" value="">Selecione</option>
            <option value="Engenharia Civil">Engenharia Civil</option>
            <option value="Matemática">Matemática</option>
            <option value="Sistema de Informação">Sistema de Informação</option>

        </select></p><br/>

    <input class="button button1" type="submit" value="Enviar">
    <input type="reset" value="Limpar">

</form>

			<?php

			?>

		</div>
		<div id="sidebar">
			<aside>
				<ul>
				<center>Eventos
				<a href="http://cssday.io" target="_blank">
				 <img src="http://www.divyweb.com/site/uploads/2015/12/cssdayio-logo-620x269.png"
				width="130" align="_center" title="click para saber mais">
				</a><br/>


				<a href="http://javaman.io" target="_blank">
				<img src="http://harrisgray.files.wordpress.com/2013/09/java-man-tour-banner1.png"
				width="130" align="_center" title="click para saber mais">
				</a><br/>

				<a href="http://developer.io" target="_blank">
				<img src="http://www.mattosdesign.com/wallpapers/imagens/wallpaper_developer_blue.jpg"
				width="130" align="_center" title="click para saber mais">
				</a><br/></center>

				</ul>
			</aside>
		</div>
		<br><br><br><br><br><br>
		<footer>

			<a href="#">Fale Conosco</a>
		</footer>
	</div>
</body>
</html>