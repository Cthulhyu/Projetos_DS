<?php

$mensagem = isset($_REQUEST['m']) ? $_REQUEST['m'] : '';
?>
<<!doctype html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Estilo.css">
    <title>Login</title>
</head>
<body>
<form action="login.php" method="POST">
    <php echo $mensagem ?>
        Email: <input type="text" name="email">
        <br><br>
        <br><br>
        Senha: <input type="password" name="senha">
        <br><br>
        <input type="submit" value="Entrar">


</form>
</body>
</html>
