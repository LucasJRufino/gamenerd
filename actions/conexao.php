<?php

function connect(){
    #Declaração das variávies para que a conexão seja feita.
    $server = "127.0.0.1"; #Ip Local host.
    $usuario = "root"; #Usuário padrão do mysql.
    $senha = ""; #Senha padrão do mysql é vazia.
    $base = "gamenerd_bd"; #Nome do banco de dados criado.

    try{
    #Variável que inicia a conexão com o banco de dados
    $conn = new PDO("mysql:host=$server;dbname=$base",$usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $erro){
        echo "Erro ao realizar a conexão com o banco de dados, tente novamente mais tarde ou contate o suporte.";
        $conn = null;
    };

    return $conn;
};
?>