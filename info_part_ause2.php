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
	<title>Informa Participação Ausência</title>
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	<link rel="shortcut icon" href="img/favicon.ico">

	<META name="ifal" content="Site finculado ao Instituto Federal de Alagoas"/>
	<META name="keywords" content="Eventos em Maceió"/>
	<META name="author" content="estudantes SI 3° Período"/>

	<script type="text/javascript">

		function valida() {

		setTimeout("window.location='validacaonocurso.php' ", 1000);

		}

	</script>
</head>
<body>
	<div id="superior">
		<center><img src="img/ifal.png" ></center>
	</div>
	<div id="wrap">

		<header>
	<?php
            	echo '<h3>Seja bem vindo Senhor(a) Coordenador de Eventos ' . htmlspecialchars($_SESSION["usuario"]) . '!</h3>';
           	?>
           	<a href="home_c_c.php">Painel Inicial</a><br/>
	<nav>
	<ul>

	</ul>
	</nav>
		</header>
		<div id="content">
			<article>

            <form action="validacaonocurso2.php" method="post" enctype="">
<?php

echo "Alunos Pendentes de Confirmar Participação<br/><br/><br/>";

$sql = "SELECT c.usuario, a.atividade
	FROM contahora h, cadastro1 c, atividades a
	WHERE c.idusuario = h.idusuario and a.idatividade = h.idatividade and h.participou = '' ";

$resultado = mysqli_query($conexao, $sql);

$sql2 = mysqli_query($conexao, "SELECT c.usuario, a.atividade
	FROM contahora h, cadastro1 c, atividades a
	WHERE c.idusuario = h.idusuario and a.idatividade = h.idatividade and h.participou = ''  ") or die(mysqli_error());
$row = mysqli_num_rows($sql2);

if($row > 0){

	echo "<table><tr>";
	echo "<th>Usuários</th>";
	echo "<th>Atividades</th>";
	//echo "<th>Falta Confirmar </th>";
	echo "</tr><tr>";

	while($linha = mysqli_fetch_array($resultado)){

	echo "<td>{$linha['usuario']}</td>";
	echo "<td>{$linha['atividade']}</td></tr>";

	}

	echo "</table><br/>";

                echo "<h4><center>siga os passos para validar o usuario e atividade respectivamente</center></h4>
                Selecione Primeiro o nome do usuario";

$sql5 = "SELECT c.usuario
	FROM contahora h, cadastro1 c, atividades a
	WHERE c.idusuario = h.idusuario and a.idatividade = h.idatividade and h.participou = ''
                group by 1 ";// usuario

$resultado5 = mysqli_query($conexao, $sql5);

//echo "<p><label>E agora o Evento:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='aqui01'>";

while($linha5 = mysqli_fetch_array($resultado5)){

echo "<option>{$linha5['usuario']}</option>";

}

echo " </select></p>"; // fim consulta

$sql6 = "SELECT  a.atividade
	FROM contahora h, cadastro1 c, atividades a
	WHERE c.idusuario = h.idusuario and a.idatividade = h.idatividade and h.participou = ''
    	group by 1";// evento

$resultado6 = mysqli_query($conexao, $sql6);

echo "<p><label>E agora a Atividade:</label><br>";
echo "<select type='selected' required='required' value='selecione'  name='aqui02'>";

while($linha6 = mysqli_fetch_array($resultado6)){

echo "<option>{$linha6['atividade']}</option>";

}

echo " </select></p>
<input class='button button1' type='submit' value='Validar Usuário'>"; // fim consulta

}else{
	echo "Nenhuma Atividade para Verificação";
}


?>

        </form>
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
