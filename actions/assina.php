<?php
include "conexao.php";
$conexao=connect(); 
  
session_start();

  $sql="UPDATE usuarios SET assinante = 1 WHERE id=?";

  $query=$conexao->prepare($sql);
  $query->bindParam(1, $_SESSION["usuario"][0], PDO::PARAM_STR);
  echo $query->execute();

  $query = null;
?>  