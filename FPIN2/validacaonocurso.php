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
    <title>validou</title>
    <meta http-equiv="refresh" content=1;url="home_c_e.php">

</head>
<body>

<?php

$sql = "SELECT c.idusuario
FROM inscreve_evento i, cadastro1 c, eventos e
WHERE c.idusuario = i.idusuario and e.idevento = i.idevento and i.participou = ''
LIMIT 1 ";

$result = mysqli_query($conexao, $sql);
$fetch = mysqli_fetch_assoc($result);
$fetch = array_shift($fetch);

$idusuario = $fetch; // recupero o id do usuario

$sql2 = "SELECT e.idevento
FROM inscreve_evento i, cadastro1 c, eventos e
WHERE c.idusuario = i.idusuario and e.idevento = i.idevento and i.participou = ''
LIMIT 1 ";

$result2 = mysqli_query($conexao, $sql2);
$fetch2 = mysqli_fetch_assoc($result2);
$fetch2 = array_shift($fetch2);

$idevento = $fetch2; // recupero o id do Evento

mysqli_query($conexao, "UPDATE inscreve_evento SET participou = 'True' WHERE idevento='$idevento' and idusuario='$idusuario' ") or die(mysqli_error());
    echo "<script>alert('Atualizado com Sucesso, click em OK');</script>";

?>

</body>
</html>

