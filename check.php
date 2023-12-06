<?php 
    require 'actions/showinfo.php';
    $username = loggedInUsername();
    if ($username == "login"){
        header("Location: entrar.php");
        die();
    } else {
        header("Location: dashboard.php");
        die();
    }
?>