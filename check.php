<?php 
    require 'actions/showusername.php';
    $username = loggedInUsername();
    if ($username == "login"){
        header("Location: entrar.php");
        die();
    } else {
        header("Location: dashboard.php");
        die();
    }
?>