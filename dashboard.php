

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crude SP skills</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/dafa5c5d34.js" crossorigin="anonymous"></script>

    <script src="js/funcoes.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="https://kit.fontawesome.com/dafa5c5d34.js" crossorigin="anonymous"></script>
    <style>
    #botaoSeta {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 17%;
            height: 10%;
            font-size: 45px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 30px;
        }
    </style>
</head>

<body class="corpo">
<button id="botaoSeta" onclick="history.back()"><i class="fa-solid fa-caret-left">
    <b style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">GameNerd</b>
</i>
</button>

        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">
                            <h4>
                                <li class="fas fa-lock"></li> perfil
                            </h4>
                        </div>
                        <?php 
                            require 'actions/showusername.php';
                            $username = loggedInUsername();
                            echo $username; ?>

                    </div>
                </div>
            </div>
            <a class="btn btn-danger" href="actions/logout.php">Deslogar</a>


</body>

</html>