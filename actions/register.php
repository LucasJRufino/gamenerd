<?php
include "conexao.php";
$conexao = connect();

$dados = array(
    htmlentities($_POST['nomeM']),
    htmlentities(password_hash($_POST['senhaS'], PASSWORD_DEFAULT)),
    htmlentities($_POST['emailE']),
    
    $assinante = 0
);





$sql = "INSERT INTO usuarios (nome, senha, email) VALUES (?,?,?)";

$query = $conexao->prepare($sql);
$query->bindParam(1, $dados[0], PDO::PARAM_STR);
$query->bindParam(2, $dados[1], PDO::PARAM_STR);
$query->bindParam(3, $dados[2], PDO::PARAM_STR);

echo $query->execute();

$query = null;

?>