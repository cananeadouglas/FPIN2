<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('../conecta_banco.php');
?>

<?php
include ('../start.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Atividades</title>
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
	<link rel="stylesheet" type="text/css" href="../css/css.css"/>
	<link rel="shortcut icon" href="../img/favicon.ico">

	<META name="ifal" content="Site finculado ao Instituto Federal de Alagoas"/>
	<META name="keywords" content="Eventos em Maceió"/>
	<META name="author" content="estudantes SI 3° Período"/>
	<meta http-equiv="refresh" content=1;url="../home_aluno.php">
</head>
<body>
	<div id="superior">
		<center><img src="../img/ifal.png"; ></center>
	</div>
	<div id="wrap">

		<header>

		</header>

		<div id="content">
			<article>

<!-- ----------------------------------------------------------------------------------------  -->

<?php

$usuario = $_SESSION['usuario'];
$atividade = $_POST['atividade'];

$sql = "SELECT idusuario
            FROM cadastro1
            WHERE usuario = '$usuario'";

$result = mysqli_query($conexao, $sql);
$fetch = mysqli_fetch_assoc($result);
$fetch = array_shift($fetch);
$idusuario = $fetch; // recupero o id do usuario


$sql2 = "SELECT idatividade
            FROM atividades
            WHERE atividade = '$atividade' ";

$result2 = mysqli_query($conexao, $sql2);
$fetch2 = mysqli_fetch_assoc($result2);
$fetch2 = array_shift($fetch2);

$idatividade = $fetch2; // recupero o id do usuario

//echo "$idusuario + $idatividade";

$query1 = mysqli_num_rows(mysqli_query($conexao,"SELECT idcontahora
		FROM contahora
		WHERE idusuario = '$idusuario' and idatividade = '$idatividade' and participou = '' "));
if ($query1 >= 1){
	echo "<script>alert('Escolha outra Atividade, você já esta cadastrado no mesmo. Click em OK');</script>";
}else{

mysqli_query($conexao,"INSERT INTO contahora (idusuario, idatividade)
	VALUES ('$idusuario','$idatividade');") or die(mysqli_error());
	echo "<script>alert('Inscrição Realizada click em OK');</script>";

}

?>

<!-- ----------------------------------------------------------------------------------------  php em baixo  -->

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
