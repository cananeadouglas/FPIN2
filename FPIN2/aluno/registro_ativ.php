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
				<ul>
					<li><a href="../home_aluno.php">Painel Inicial</a></li>

				</ul>
			</nav>
		</header>

		<div id="content">
			<article>

<!-- ----------------------------------------------------------------------------------------  -->

<form action="#" method="post" ecntype="">


    <input placeholder="Digite quantas horas realizadas na atividade" required="required" type="text" name="horas"/>


	<p><label>Selecione a atividade realizada </label><br>
      <select type='selected' required='required' value='selecione'  name='complemento'>
            <option>Monitoria em disciplina</option>
            <option>Estágio Extracurricular</option>
            <option>Ministrante de oficina ou curso na área do curso em que está matriculado</option>
            <option>Participação como conferencista, mediador ou debatedor em eventos na área específica de formação, com carga horária igual ou superior a 1 hora</option>
            <option>Participação em congressos, seminários, simpósios, conferências, oficinas de trabalho e similares, na área específica de formação</option>
            <option>Bolsas concedidas pelo IFAL (monitoria, estágios extracurriculares, entre outros)</option>
            <option>Bolsas de iniciação científica (PIBIC, PIBITI) concedidas pelo IFAL ou por agências de fomento (FAPEAL, CNPQ, entre outras)</option>
            <option>Curso regular de língua estrangeira</option>
            <option>Cursos direcionados ao uso de Tecnologia de Informação e Comunicação </option>
            <option>Participação em projetos de extensão cadastrados</option>
            <option>Premiação em concursos de monografia, promovidos ou não pelo IFAL</option>
            <option>Apresentação de trabalho em congressos, seminários, simpósios, conferência, oficinas de trabalho e similares, na área específica de formação</option>
            <option>Desenvolvimento de pesquisa com produto final publicado em períodico, obra coletiva ou autoria de livro (texto integral)</option>
            <option>Participação em órgãos colegiados do IFAL</option>
            <option>Organização de Eventos</option>
            <option>participação em intercâmbio ou convênio cultural</option>
            <option>Participação em grupos de pesquisa</option>
            <option>Atividades de tutoria, relacionadas à área específica de informação</option>

      </select></p>

      <br/>
        <input class="button button1" type="submit" value="Enviar Anexo">

            </form>

<!-- ----------------------------------------------------------------------------------------  php em baixo  -->

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

		</footer>
	</div>
</body>
</html>
