<!DOCTYPE html>
<html>
<head>
    <title>teste1</title>

<script type="text/javascript">

    function janelaPop(url){
        window.open(url, "popup", "width = 400, height = 303");
    }
    janelaPop("http://www.mensagensdeboanoite.com.br/wp-content/uploads/2015/03/noite-repleta-paz.jpg");

</script>

</head>
<body>

<form method="get" action="teste2.php" enctype="multipart/form-data">
    Nome<input type="text" name="nome" /><br/>
    usuario<input type="text" name="usuario"><br/>
    email<input type="email" name="email"><br/>

<input type="hidden" name="MAX_FILE_SIZE" value="image">
Enviar arquivo: <input name="arquivo" type="file">
<input type="submit" value="Enviar arquivo">


    <input type="submit" value="Enviar">
    <input type="reset" value="Limpar">


</form>


<?php
$uploaddir = 'http://localhost/dashboard/docs/files/FPIN-master/teste/';
$arquivo = $uploaddir. $_FILES['arquivo']['image'];

if (move_uploaded_file($_FILES ['arquivo'] ['tmp_image'], $uploaddir)){
    echo "sucesso";
}else{
    echo "error";
}

?>

</body>
</html>

