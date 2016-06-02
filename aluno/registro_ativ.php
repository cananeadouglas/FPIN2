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

<form action="complemento_reg_ativ.php" method="post" ecntype="">

<?php

$sql6 = "SELECT atividade
                    FROM atividades";// atividade

$resultado6 = mysqli_query($conexao, $sql6);

echo "<p><label>Declaro que participei da atividades:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='atividade'>";

while($linha6 = mysqli_fetch_array($resultado6)){

echo "<option>{$linha6['atividade']}</option>";

}

echo " </select></p>";

?>
<p>Aqui esta o comprovante: </p>

<input type="file" name="arquivo"/>
<br/><br/>
<input class="button button1" type="submit" value="Enviar">

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
