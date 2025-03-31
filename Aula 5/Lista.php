<?php
include_once("Coneção_BancodeDados.php");
$sql = "Select * FROM aluno";
$result = $conexao->query($sql);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>RA</th>
        <th>Email</th>
    </tr>
    <?php while ($row = $result->fetch(PDO::FETCH_OBJ)) { ?>
        <tr>
            <th><?php echo $row-> id ?></th>
            <th><?php echo $row-> NOME?></th>
            <th><?php echo $row-> ra ?></th>
            <th><?php echo $row-> email ?></th>
        </tr>
        <?php } ?>
</table>

</body>
</html>
