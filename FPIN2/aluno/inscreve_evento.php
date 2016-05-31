<?php
include ('../conecta_banco.php');
?>

<?php
include ('../start.php');
?>

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
		<center><img src="../img/ifal.png"></center>
	</div>
	<div id="wrap">

		<header>
	<?php
            echo '<h3>Seja bem vindo ' . htmlspecialchars($_SESSION["usuario"]) . '!</h3>';
           	?>
           	<a href="../home_aluno.php">Painel Inicial</a><br/>
			<nav>

			</nav>
		</header>
		<div id="content">
			<article>

<!-- ----------------------------------------------------------------------------------------  -->

<form action="inscreve_evento_realizado.php" method="post" ecntype="">

<p>Deseja se Inscrever em qual curso?</p>

<?php

$sql = "SELECT nomeevento FROM eventos";

$resultado = mysqli_query($conexao, $sql);

echo "<p><label>Selecione de eventos:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='nomeevento'>";

while($linha = mysqli_fetch_array($resultado)){

echo "<option>{$linha['nomeevento']}</option>";

}

echo " </select></p>";

?>

      <input class="button button1" type="submit" value="Fazer Inscrição">


 </form>

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
