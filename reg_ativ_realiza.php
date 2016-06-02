<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('conecta_banco.php');
?>

<?php
include ('start.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Evento em cadastro</title>
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	<link rel="shortcut icon" href="img/favicon.ico">

	<META name="IFAL" content="Site finculado ao Instituto Federal de Alagoas"/>
	<META name="keywords" content="Eventos em Maceió"/>
	<META name="author" content="estudantes SI 3° Período"/>
	<meta http-equiv="refresh" content=1;url="home_c_c.php">

</head>
<body>
	<div id="superior">
		<center><img src="img/ifal.png"></center>
	</div>
	<div id="wrap">

		<header>
			<h3></h3>
		</header>
		<div id="content">
			<article>

<?php

$atividade = $_POST['atividade'];
$cargahoraria = $_POST['cargahoraria'];

$usuario =  $_SESSION['usuario'];

mysqli_query($conexao,"INSERT INTO atividades (atividade, cargahoraria) VALUES ('$atividade','$cargahoraria') ") or die(mysqli_error());
	echo "<script>alert('Cadastro de Evento Realizado click em OK e aguarde...');</script>";

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