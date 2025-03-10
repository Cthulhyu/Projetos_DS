<?php
    $a = 3;
    $b = 4;
    $c = $a + $b;
    echo "<div style = 'color: red'>" . $c . "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
</head>
<body>
    <div style = "color: blue"> 
        <?php echo $c?>
    </div>
    <form method="post" action="resultado.php">
        Nome:<input type="text" name="nome">
        <br><br>
        Idade:<input type="number" name="idade">
        <br><br>
        Data:<input type="date" name="data">
        <br><br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>