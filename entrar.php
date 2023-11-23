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

        </form>

    </div>


</body>

</html>