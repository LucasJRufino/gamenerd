<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/funcoes.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="js/sweetalert.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
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
            margin-bottom: 16px;
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
    </style>
</head>
<body>
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

