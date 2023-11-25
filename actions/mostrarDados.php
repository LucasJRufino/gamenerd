<?php 
    include "conexao.php";
    $conexao=connect();

    $sql= "SELECT * FROM usuarios";
    $result=$conexao->query($sql);

    $tabela="";
    while($dados=$result->fetch(PDO::FETCH_ASSOC)){
        $tabela = $tabela.'<tr>
                                <td>'.$dados['nome'].'</td>
                                <td>'.$dados['email'].'</td>
                                <td>'.$dados['dataNasc'].'</td>
                                <td>'.$dados['numTel'].'</td>
                                <td>
                                    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEdicao" onclick="editarDados('.$dados['id'].')"> <i class="fas fa-edit"></i> </span>
                                </td>
                                <td>
                                    <span class="btn btn-danger btn-sm" onclick="apagarEstudante('.$dados['id'].')"> <i class="fas fa-trash-alt"></i> </span>
                                </td>
                           </tr>';
    }
    
    $conexao = null;
    echo '<table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de nascimento</th>
                <th>Número de telefone</th>
                <th>Editar</th>
                <th>Apagar</th>
            </thead>
            <tody>'.$tabela.'
            </tbody>'
?>