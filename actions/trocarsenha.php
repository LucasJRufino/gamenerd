<?php
include "conexao.php";
$conexao = connect();

  $dados = array(
    htmlentities(password_hash($_POST['senhaS'], PASSWORD_DEFAULT)),
    htmlentities($_POST['nomeM']),
  );

  
  $sql="UPDATE usuarios SET senha=? WHERE nome = ?";

  $query=$conexao->prepare($sql);
  $query->bindParam(1, $dados[0], PDO::PARAM_STR);
  $query->bindParam(2, $dados[1], PDO::PARAM_STR);

  echo $query->execute();

  $query = null;
?>  