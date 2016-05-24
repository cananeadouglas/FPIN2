<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aguarde Cadastro</title>
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	<link rel="shortcut icon" href="img/favicon.ico">

	<META name="IFAL" content="Site finculado ao Instituto Federal de Alagoas"/>
	<META name="keywords" content="Eventos em Maceió"/>
	<META name="author" content="estudantes SI 3° Período"/>

</head>
<body>
	<div id="superior">
		<center><img src="img/ifal.png"; ></center>
	</div>
	<div id="wrap">

		<header>
			<h3></h3>
		</header>
		<div id="content">
			<article>

<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$sexo = $_POST['sexo'];
$curso = $_POST['curso'];
$tipo = "Aluno";


$query1 = mysqli_num_rows(mysqli_query($conexao,"select * from cadastro1 where usuario = '$usuario';"));
if ($query1 == 1){
	echo "<script>alert('Usuário Existente'); history.back();</script>";
}else{
	mysqli_query($conexao,"INSERT INTO cadastro1 (nome, idade, usuario, email, senha, sexo, curso, tipo) VALUES ('$nome','$idade','$usuario','$email','$pass','$sexo','$curso','$tipo');") or die(mysqli_error());
	
	header('location: home_aluno.php');
	echo "<script>alert('Cadastrado Realizado click em OK e aguarde...');</script>";
}

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