<?php
include "conexao.php";
$conexao=connect();

$id = htmlentities($_POST['id']);

$query=$conexao->prepare("SELECT * FROM usuarios WHERE id=?");
$query->bindParam(1, $id, PDO::PARAM_INT);
$query->execute([$id]);
$dados = $query->fetch();

echo json_encode($dados);
?>