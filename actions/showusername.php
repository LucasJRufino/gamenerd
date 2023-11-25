<?php 
function loggedInUsername() { 
    require 'conexao.php';

    $conexao = connect();

    $sql = "SELECT nome FROM usuarios WHERE id = :id";
    $prep = $conexao->prepare($sql);
    session_start();
    $prep->bindParam( ':id', $_SESSION["usuario"][0], PDO::PARAM_STR); 
    $prep->execute();
    $username = $prep->fetchColumn(); // only one column produced by query
if ($username == null){
    return "login";
} else {
    return $username;
}
    
  }
 ?>