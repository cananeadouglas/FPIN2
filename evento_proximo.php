<?php
include ('conecta_banco.php');
?>

<?php
include ('start.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Eventos proximos</title>
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
	<?php
            	echo "<h3>Lista de Eventos proximos</h3><br/>";
           	?>
           	<a href="home_adm.php">Painel Inicial</a><br/>


			<nav>

			</nav>
		</header>
		<div id="content">
			<article>
<?php

$today = date("y-m-d");   // dia atual          '2016-06-01' and '2016-07-31'
$proximo_mes = mktime(0, 0, 0, date("m") + 2, date("d"), date("Y"));
$doismeses = date("y-m-d", $proximo_mes);

//echo "$today and $doismeses";

//$sql = "SELECT e.nomeevento, e.diaevento, c.nome  FROM eventos e, cadastro1 c WHERE e.idusuario = c.idusuario and diaevento BETWEEN '$today' and '$doismeses'";
$sql = "SELECT e.nomeevento, e.diaevento, c.nome  FROM eventos e, cadastro1 c WHERE e.idusuario = c.idusuario and diaevento >= '$today'";

$resultado = mysqli_query($conexao, $sql);

//echo "Base de dados relacionado para daqui a dois meses: <br/><br/>";
echo "Todos Eventos relacionado do Banco de dados e seu Responsável:  <br/><br/>";

echo "<table>";
echo "<tr>";
echo "<th>Nome do Evento</th>";
echo "<th>Dia</th>";
echo "<th>Responsável</th>";
echo "</tr><tr>";

while($linha = mysqli_fetch_array($resultado)){

echo "<td>{$linha['nomeevento']}</td>";
echo "<td>{$linha['diaevento']}</td>";
echo "<td>{$linha['nome']}</td></tr>";

/*	$nome = $linha['nome'];
	$usuario = $linha['usuario'];
	$tipo = $linha['tipo'];
	echo "<strong>Nome: </strong> $nome <br/>";
	echo "<strong>Usuário: </strong> $usuario <br/>";
	echo "<strong>Tipo: </strong> $tipo <br/><br/>";*/
}

echo "</table>";

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
