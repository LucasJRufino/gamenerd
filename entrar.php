    <!DOCTYPE html>
    <html lang="en">
        
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dafa5c5d34.js" crossorigin="anonymous"></script>

    <title>Login</title>
    <style>
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

        body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background-color: #3d3d3d"
        }

        #login-container {
        background-color: #fff;
        border-radius: 20px;
        padding: 20px;
        width: 20%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        }

        h1 {
        color: #333;
        }

        input {
        width: calc(100% - 70px);
        padding: 10px;
        margin: 15px 0;
        box-sizing: border-box;
        }

        #forgot-password {
        margin-top: 20px;
        margin-bottom: 20px;
        color: #3498db;
        text-decoration: underline;
        cursor: pointer;
        
        }

        #login {
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 50%;
        transition: background-color 0.3s;
        }

    </style>
    </head>
    
    <body>
        
<button id="botaoSeta" onclick="history.back()"><i class="fa-solid fa-reply"></i></button>
    <div id="login-container">
        <h1>Login</h1>
        

        <form method="POST" action="actions/login.php">

        <input type="text" placeholder="Login" id="nome" name="nome" required>
        <input type="password" placeholder="Senha" id="senha" name="senha" required>


        <input id="login" type="submit" value="Login" class="submit">
        <div>
        <a href="signup.php" style="text-decoration: none; e">
        <button type="button" id="signup" class="btn btn-secondary">Cadastrar</button>
        </a>
        </div>
        <div id="forgot-password" onclick="forgotPassword()">Esqueci minha senha</div>
        </form>
        
    </div>
    </body>
    </html>
