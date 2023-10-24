<?php
    session_start();
    error_reporting(0);
    include_once("cep.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PW III</title>
</head>

<body>
    <form action="#" method="post">
        <h3>Digite o CEP para consultar: </h3>
        <div class="procura">
            <input type="text" class="cep" name="cep" placeholder="Digite um cep">
            <input type="submit" value="Procurar" class="botao">
        </div>
        Rua:<input type="text" name="rua" value="<?php echo $resultado->logradouro;?>">
        Bairro:<input type="text" name="bairro" value="<?php echo $resultado->bairro; ?>">
        Cidade:<input type="text" name="cidade" value="<?php echo $resultado->localidade; ?>">
        Estado:<input type="text" name="estado" value="<?php echo $resultado->uf; ?>">
    </form>
</body>

</html>