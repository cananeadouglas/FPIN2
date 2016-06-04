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
</head>
<body>
	<div id="superior">
		<center><img src="../img/ifal.png"; ></center>
	</div>
	<div id="wrap">

		<header>
			<h3>Seja bem Vindo</h3>
			<nav>
			<a href="../home_aluno.php">Painel Inicial</a>
			</nav>
		</header>

		<div id="content">
			<article>

<!-- ----------------------------------------------------------------------------------------  -->


<?php

$usuario = $_SESSION["usuario"];

$sql7 = "SELECT idusuario
            FROM cadastro1
            WHERE usuario = '$usuario'";

$result7 = mysqli_query($conexao, $sql7);
$fetch7 = mysqli_fetch_assoc($result7);
$fetch7 = array_shift($fetch7);

$idusuario = $fetch7; // recupero o id do usuario

echo "Relatório de participação Aceitas pelo Coordenador de Evento<br/><br/><br/>";

$sql = "SELECT c.usuario, e.nomeevento, i.participou
	FROM cadastro1 c join inscreve_evento i using(idusuario) join eventos e using(idevento)
	WHERE i.participou = 'True' AND c.idusuario = '$idusuario' ";

$resultado = mysqli_query($conexao, $sql);

$sql2 = mysqli_query($conexao, "SELECT c.usuario, e.nomeevento, i.participou
	FROM cadastro1 c join inscreve_evento i using(idusuario) join eventos e using(idevento)
	WHERE i.participou = 'True' AND c.idusuario = '$idusuario' ") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table><tr>";
	echo "<th>Nome de usuario</th>";
	echo "<th>Nome do Evento</th>";
	echo "<th>Participação</th>";
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	echo "<td>{$linha['usuario']}</td>";
	echo "<td>{$linha['nomeevento']}</td>";
	echo "<td>{$linha['participou']}</td></tr>";

	}

	echo "</table><br/>";

}else{
	echo "Relatório de Participação";
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
