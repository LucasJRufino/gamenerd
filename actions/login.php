<?php
require("conexao.php");
$conexao = connect();

if (isset($_POST["nome"]) && isset($_POST["senha"]) && $conexao != null) {
    $query = $conexao->prepare("SELECT * FROM usuarios WHERE login = ? LIMIT 1");
    $query->execute(array($_POST["nome"]));

    if ($query->rowCount()) {
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        if (password_verify($_POST["senha"], $user['senha'])) {

            session_start();
            $_SESSION["usuario"] = array($user["nome"], $user["adm"]);

            header('Location: ../dashboard.php');
        } else {
            header('Location: ../index.php');
        }


    } else {
        header('Location: ../index.php');
    }
} else {
    header('Location: ../index.php');
}
?>