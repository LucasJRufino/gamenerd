<!-- reset-password.html (Página de redefinição de senha) -->
<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/funcoes.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="js/sweetalert.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dafa5c5d34.js" crossorigin="anonymous"></script>


    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #3d3d3d;
        }

        form {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;    
            justify-content: center;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 30px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 60%;
            font-size: 16px;
        }

        button:hover {
            background-color: #237eba;
        }

        #botaoSeta {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 5%;
            height: 10%;
            font-size: 40px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 30px;
        }
    </style>

</head>

<body>
    
    <form class="form" id="formSen">
    <h1>Redefinir Senha</h1>
        <label for="nome">Nome da conta:</label>
        <input type="text" class="form_input" id="nome" name="nome" required>
        <br>
        <label for="novaSenha">Nova Senha:</label>
        <input type="password" class="form_input" id="novaSenha" name="novaSenha" required>
        <br>
        <label for="confirmarSenha">Confirmar Senha:</label>
        <input type="password" class="form_input" id="confirmarSenha" name="confirmarSenha" required>
        <br>
        <button type="button" class="btn btn-primary" id="btnSen" onclick="redefinirSenha()">Redefinir Senha</button>
    </form>
</body>
</html>
