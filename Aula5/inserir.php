<?php

include_once("conexao.php");

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
$nome = $_REQUEST['nome'];
$ra = $_REQUEST['ra'];
$email = $_REQUEST['email'];

if ($id) {
    $sql = "UPDATE aluno SET NOME = :nome, ra = :ra, email = :email
    WHERE id = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id', $id);
    $mensagem = "Registro atualizado com sucesso."
} else {
    $sql = "INSERT INTO aluno (NOME, ra, email) 
        VALUE (:nome, :ra, :email)";
    $stmt = $conexao->prepare($sql);
    $mensagem = "Registro salvo com sucesso."

}
$stmt->bindParam(':email', $email);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':ra', $ra);
$stmt->execute();
header("Location: Lista.php?mensagem=$mensagem");
?>
