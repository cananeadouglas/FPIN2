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
    <meta http-equiv="refresh" content=2;url="home_c_e.php">

</head>
<body>

<?php

$usuario = $_POST['aqui01'];
$nomeevento = $_POST['aqui02'];

//echo "$usuario    e     $nomeevento";

$sql = "SELECT idusuario
            FROM cadastro1
            WHERE usuario = '$usuario'";

$result = mysqli_query($conexao, $sql);
$fetch = mysqli_fetch_assoc($result);
$fetch = array_shift($fetch);
$idusuario = $fetch; // recupero o id do usuario


$sql2 = "SELECT idevento
                FROM eventos
                WHERE nomeevento = '$nomeevento' ";

$result2 = mysqli_query($conexao, $sql2);
$fetch2 = mysqli_fetch_assoc($result2);
$fetch2 = array_shift($fetch2);
$idevento = $fetch2; // recupero o id do Evento


$sql3 = "SELECT i.inscricao
FROM inscreve_evento i, cadastro1 c, eventos e
WHERE c.idusuario = '$idusuario' and e.idevento = '$idevento' and i.participou = '' ";

$result3 = mysqli_query($conexao, $sql3);
$fetch3 = mysqli_fetch_assoc($result3);
$fetch3 = array_shift($fetch3);

$inscricao = $fetch3; // recupero o id da inscricao

echo " $idevento + $idusuario + inscricao ";

mysqli_query($conexao, "UPDATE inscreve_evento
        SET participou = 'True'
        WHERE idevento='$idevento' and idusuario='$idusuario' and inscricao='$inscricao' and participou = '' ")
        or die(mysqli_error());
        echo "<script>alert('Validação Efetuada com Sucesso, click em OK');</script>";

?>

</body>
</html>

