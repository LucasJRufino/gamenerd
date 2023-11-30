<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude SPskills</title>
    <link rel="stylesheet" href="css/formLogin.css">
</head>

<body>

    <div id="login">

        <form class="card" method="POST" action="actions/login.php">

            <div class="card-header">

                <h2>Login</h2>

            </div>

            <div class="card-content">

                <div class="card-content-area">

                    <label for="usuario">Usuário</label>

                    <input type="text" id="nome" name="nome" autocomplete="off">

                </div>

                <div class="card-content-area">

                    <label for="password">Senha</label>

                    <input type="password" id="senha" name="senha" autocomplete="off">

                </div>

            </div>

            <div class="card-footer">

                <input type="submit" value="login" class="submit">

            </div>
            <a href="signup.php" style="text-decoration: none; e">
            <div style="width: 50%; height: 25px;  margin: auto; text-align: center; 
             margin-top: 5%; padding-top: 4%;border: none; background-color: #7d7d7d; color: #ffffff; vertical-align: middle;font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Cadastrar</div>
            </div>
            </a>
    </div>


</body>

</html>