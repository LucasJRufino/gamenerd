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
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #3d3d3d;
        }

        form {
            background-color: #fff;
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
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
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
<button id="botaoSeta" onclick="history.back()"><i class="fa-solid fa-reply"></i></button>
    <form class="form" id="formMod">
        
        <label for="nomeM">Nome:</label>
        <input type="text" name="nomeM" class="form_input" id="nomeM" placeholder="Nome" required>

        <label for="emailE">Email:</label>
        <input  type="email" name="emailE" class="form_input" id="emailE" placeholder="seuemail@dominio.com"required>

        <label for="senhaS">Senha:</label>
        <input  type="password" name="senhaS" class="form_input" id="senhaS" placeholder="************"required>

        <!-- Adicione outros campos conforme necessário -->

        <button type="button" class="btn btn-primary" id="btnMod" onclick="inserirModerador()">Enviar</button>
    </form>
</body>
</html>

