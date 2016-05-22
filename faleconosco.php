<?php
include ('conecta_banco.php');
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
            <h3>Fale Conosco</h3>
		</header>
		<div id="content">
			<article>
			<p>Em o quê podemos ajudar?</p>
			<form method="post" action="?acao=enviar">
				<input type="text" name="seunome" placeholder="Nome" required="requerid" /><br/>
				<input type="email" name="email" placeholder="E-mail" required="requerid" /><br/>
				<input type="text" name="assunto" placeholder="Assunto" required="requerid" /><br/>
				<textarea name="mensagem" ></textarea><br/>
				<input class="button button1" type="submit" value="Enviar Mensagem">
				<input type="reset" value="Limpar">

			</form>

ddd
			<?php
			/*
			$acao=$_POST["acao"];

				if ($acao=="enviar"){
					$seunome = $_POST['seunome'];
					$email = $_POST['email'];
					$assunto = $_POST['assunto'];
					$mensagem = $_POST['mensagem'];

				}

			?>

			<?php


			$to = "mixcopia@hotmail.com";
			$subject = "$assunto";
			$message = "<strong> Nome: </strong> $seunome <br/> <strong> Email: </strong>  $email <br/> <strong> Assunto: </strong> $assunto <strong> Mensagem: </strong> $mensagem <br/> " ;

			$header = "MINE-Version: 1.0\n";
			$header .= "Content-type: text/html; charset=iso-8859-1\n";
			$header .= "From: $email\n";

			mail($to, $subject, $message, $header);
			echo "Mensagem Enviada com Sucesso!";
			*/

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

			<a href="#">Fale Conosco</a>
		</footer>
	</div>
</body>
</html>
