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
    <meta http-equiv="refresh" content=1;url="home_c_c.php">

</head>
<body>

<?php

$usuario = $_POST['aqui01'];
$atividade = $_POST['aqui02'];

//echo "$usuario    e     $atividade";

$sql = "SELECT idusuario
            FROM cadastro1
            WHERE usuario = '$usuario'";

$result = mysqli_query($conexao, $sql);
$fetch = mysqli_fetch_assoc($result);
$fetch = array_shift($fetch);
$idusuario = $fetch; // recupero o id do usuario


$sql2 = "SELECT idatividade
                FROM atividades
                WHERE atividade = '$atividade' ";

$result2 = mysqli_query($conexao, $sql2);
$fetch2 = mysqli_fetch_assoc($result2);
$fetch2 = array_shift($fetch2);

$idatividade = $fetch2; // recupero o id da atividade


$sql3 = "SELECT h.idcontahora
FROM contahora h, cadastro1 c, atividades a
WHERE h.idusuario = '$idusuario' and h.idatividade = '$idatividade' and h.participou = '' ";

$result3 = mysqli_query($conexao, $sql3);
$fetch3 = mysqli_fetch_assoc($result3);
$fetch3 = array_shift($fetch3);

$idcontahora = $fetch3; // recupero o id da inscricao


mysqli_query($conexao, "UPDATE contahora
        SET participou = 'True'
        WHERE idusuario='$idusuario' and idatividade='$idatividade' and idcontahora = '$idcontahora' and participou = '' ")
        or die(mysqli_error());
        echo "<script>alert('Validação Efetuada com Sucesso, click em OK');</script>";

?>

</body>
</html>

