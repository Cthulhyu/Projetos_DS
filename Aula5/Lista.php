<?php
include_once("conexao.php");
$id = isset($_REQUEST["id"]) ? $_REQUEST['id'] : null;
if ($id) {
    $sql = "SELECT * FROM aluno WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $resultItem = $stmt->fetch(PDO::FETCH_OBJ);
    #var_dump($resultItem);
}
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
    <link rel="stylesheet" type="text/css" href="Estilo.css" media="screen"/>
    <title>Lista</title>
</head>
<body>
<div id="box">
    <form action="inserir.php" method="POST" id="cor">
        Nome: <input type="text" name="nome"
                     value="<?php echo isset($resultItem) ? $resultItem->NOME : '' ?>">
        RA: <input type="number" name="ra"
                   value="<?php echo isset($resultItem) ? $resultItem->ra : '' ?>">
        <br><br>
        Email: <input type="text" name="email"
                      value="<?php echo isset($resultItem) ? $resultItem->email : '' ?>">
        <br><br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
        <br><br
    </form>
</div>


<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>RA</th>
        <th>Email</th>
        <th>AÇÕES</th>
    </tr>
    <?php while ($row = $result->fetch(PDO::FETCH_OBJ)) { ?>
        <tr>
            <th><?php echo $row->id ?></th>
            <th><?php echo $row->NOME ?></th>
            <th><?php echo $row->ra ?></th>
            <th><?php echo $row->email ?></th>
            <td>
                <a href="Lista.php?id=<?php echo $row->id ?>">Editar</a>
                <a href="excluir.php?id=<?php echo $row->id ?>">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
