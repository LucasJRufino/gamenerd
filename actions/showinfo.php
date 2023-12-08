<?php 
    require "conexao.php";
    session_start();    

function loggedInUsername() { 
    $conexao = connect();

    $sql = "SELECT nome FROM usuarios WHERE id = :id";
    $prep = $conexao->prepare($sql);

    $prep->bindParam( ':id', $_SESSION["usuario"][0], PDO::PARAM_STR); 
    $prep->execute();
    $username = $prep->fetchColumn(); // only one column produced by query
if ($username == null){
    return "login";
} else {
    return $username;
}
    
  }
  function loggedInAssinante() { 
    $conexao = connect();

    $sql = "SELECT assinante FROM usuarios WHERE id = :id";
    $prep = $conexao->prepare($sql);

    $prep->bindParam( ':id', $_SESSION["usuario"][0], PDO::PARAM_STR); 
    $prep->execute();
    $assinante = $prep->fetchColumn(); 
if ($assinante == 1){
    return true;
} else {
    return false;
}
    
  }
  function loggedInEmail() { 
    $conexao = connect();   

    $sql = "SELECT email FROM usuarios WHERE id = :id";
    $prep = $conexao->prepare($sql);
    $prep->bindParam( ':id', $_SESSION["usuario"][0], PDO::PARAM_STR); 
    $prep->execute();
    $email = $prep->fetchColumn(); // only one column produced by query
if ($email == null){
    return "sem email cadastrado!";
} else {
    return $email;
}
    
  }
 ?>