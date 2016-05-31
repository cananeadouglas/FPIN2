<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "test";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
    <title>teste2</title>
</head>
<body>

<?php

$nome = $_GET['nome'];
$usuario = $_GET['usuario'];
$email = $_GET['email'];

echo "$nome mais $usuario mais $email";

$sql = mysql_query("INSERT INTO cadastro1 (nome, usuario, email) VALUES ('$nome','$usuario','$email');") or die(mysql_error());

echo "<center><h1>Cadastro efetuado com sucesso<h1></center>";

?>

</body>
</html>

