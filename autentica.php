<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Autenticando</title>
	<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	<link rel="shortcut icon" href="img/favicon.ico">

	<META name="ifal" content="Site finculado ao Instituto Federal de Alagoas"/>
	<META name="keywords" content="Eventos em Maceió"/>
	<META name="author" content="estudantes SI 3° Período"/>

	<script type="text/javascript">

		function loginsucessoA(){

			setTimeout("window.location='home_aluno.php' ", 3000);
		}

		function loginsucessoAA(){

			setTimeout("window.location='home_adm.php' ", 3000);
		}

		function loginsucessoC(){

			setTimeout("window.location='home_c_c.php' ", 3000);
		}

		function loginsucessoE(){

			setTimeout("window.location='home_c_e.php' ", 3000);
		}


		function loginfalhou(){
			setTimeout("window.location='index.php' ", 3000);
		}



	</script>


</head>
<body>
	<div id="superior">
		<center><img src="img/ifal.png"></center>
	</div>
	<div id="wrap">

		<header>

		</header>
		<div id="content">
			<article>

            <?php
			$usuario = $_POST['usuario'];
			$pass = $_POST['pass'];

			$sql = mysqli_query($conexao,"select * from cadastro1 where usuario = '$usuario' and senha = '$pass';") or die(mysqli_error());
			$row = mysqli_num_rows($sql);
			if($row > 0){
				session_start();
				$_SESSION['usuario'] = $_POST['usuario'];
				$_SESSION['senha'] = $_POST['pass'];
				echo "Você foi autenticado com sucesso";

				$type0 = "Adm";
				$type1 = "Aluno";
				$type2 = "Coordenador de Curso";
				$type3 = "Coordenador de Evento";

$query1 = mysqli_num_rows(mysqli_query($conexao,"select * from cadastro1 where usuario = '$usuario' and tipo = '$type1'"));
if ($query1 == 1)
{
	echo "<script>loginsucessoA()</script>";
}
else{
	$query2 = mysqli_num_rows(mysqli_query($conexao,"select * from cadastro1 where usuario = '$usuario' and tipo = '$type2'"));
	if($query2 == 1)
	{
	echo "<script>loginsucessoC()</script>";
	}
	else
	{
		$query3 = mysqli_num_rows(mysqli_query($conexao,"select * from cadastro1 where usuario = '$usuario' and tipo = '$type3'"));
		if($query3 == 1)
		{
			echo "<script>loginsucessoE()</script>";
		}
		else
		{
			$query4 = mysqli_num_rows(mysqli_query($conexao,"select * from cadastro1 where usuario = '$usuario' and tipo = '$type0'"));
			if($query4 == 1)
			{
			echo "<script>loginsucessoAA()</script>";
			}
		}
	}
}



			}else{
				echo "Usuário ou senha Inválidos";
				echo "<script>loginfalhou()</script>";
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


		</footer>
	</div>
</body>
</html>
