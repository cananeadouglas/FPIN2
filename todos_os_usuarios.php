<?php
include ('conecta_banco.php');
?>

<?php
include ('start.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Usuários Cadastrados</title>
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
	<?php
            	echo "<h3>Lista de Usuários Cadastrados</h3><br/>";
           	?>
           	<a href="home_adm.php">Painel Inicial</a><br/>


			<nav>

			</nav>
		</header>
		<div id="content">
			<article>
<?php

$sql = "SELECT nome, usuario, tipo  FROM cadastro1";

$resultado = mysqli_query($conexao, $sql);

echo "<table>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Usuario</th>";
echo "<th>Tipo</th>";
echo "</tr><tr>";

while($linha = mysqli_fetch_array($resultado)){

echo "<td>{$linha['nome']}</td>";
echo "<td>{$linha['usuario']}</td>";
echo "<td>{$linha['tipo']}</td></tr>";

/*	$nome = $linha['nome'];
	$usuario = $linha['usuario'];
	$tipo = $linha['tipo'];
	echo "<strong>Nome: </strong> $nome <br/>";
	echo "<strong>Usuário: </strong> $usuario <br/>";
	echo "<strong>Tipo: </strong> $tipo <br/><br/>";*/
}

echo "</tr>";
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

			<a href="#">Fale Conosco</a>
		</footer>
	</div>
</body>
</html>
