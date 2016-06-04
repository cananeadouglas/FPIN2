<?php
include ('conecta_banco.php');
?>

<?php
include('start.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial Aluno</title>
	<META charset="UTF-8"/ >
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
            echo '<h3>Seja bem vindo Aluno ' . htmlspecialchars($_SESSION["usuario"]) . '!</h3>';
            ?>

			<nav>
				<ul>
					<li><a href="aluno/orientacao.php">Orientação ao Aluno</a></li>
					<li><a href="aluno/inscreve_evento.php">Inscrever-se em Evento</a></li>
					<li><a href="aluno/registro_ativ.php">Registrar Atividades Feitas</a></li>
                    <li><a href="gerarelatorio2.php">Relatório Atividades Complementares</a></li>
                    <li><a href="aluno/registrodedeclaracao.php">Declaração de participação</a></li>
                    <li><a href="logout.php">Sair do Sistema</a></li>
				</ul>
			</nav>
		</header>
		<div id="content">
			<article>
<table class="tabela"border="1px">
    <thead>
        <tr>
            <th class="tipo2" colspan="4">ATIVIDADES COMPLEMENTARES REALIZADAS</th>
        </tr>
        <tr>
            <th class="tipo2" colspan="2">Descrição das Atividades</th>
            <th class="tipo2">Pontuação em<br/>Horas realizadas</th>
            <th class="tipo2">Limite em<br/>Horas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>A</td>
            <td>Monitoria em disciplina</td>
            <td class="centralizar">20h</td>
            <td class="centralizar">60h</td>
        </tr>

        <tr>
            <td>B</td>
            <td>Estágio Extracurricular</td>
            <td class="centralizar">40h</td>
            <td class="centralizar">60h</td>
        </tr>
        <tr>
            <td>Q</td>
            <td>Participação em grupos de pesquisa;</td>
            <td class="centralizar">40h</td>
            <td class="centralizar">80h</td>
        </tr>

        <tr>
            <td colspan="4"><strong>Carga horária Cumprida: 100/200 horas</strong></td>
        </tr>

    </tbody>

</table>

			<?php

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

        <a href="fale.php">Fale Conosco</a>

		</footer>
	</div>
</body>
</html>
