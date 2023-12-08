<!DOCTYPE html>
<html lang="en">
<head>

<script src="js/funcoes.js"></script>
<script src="js/sweetalert.js"></script>

  <meta charset="UTF-8">

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
  <title>Meu Perfil</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #3d3d3d;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

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

    h1 {
      color: #333;
    }

    #profile {
      background-color: #fff;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    p {
      margin: 10px 0;
      color: #555;
    }

    #logout, #subscribe {
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
      transition: background-color 0.3s;
    }

    #logout:hover, #subscribe:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
<a href="index.php">
<button id="botaoSeta"><i class="fa-solid fa-caret-left">
    <b style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">GameNerd</b>
</i>
</button>
</a>
  <div id="profile">
  <i class="fa-regular fa-user fa-5x"></i>
  <h1><?php 
                            require 'actions/showinfo.php';
                            $username = loggedInUsername();
                            echo $username; ?></h1>

    <p><h1 style="font-size: 27px">Email: <?php
          $email = loggedInEmail();
          echo $email; ?></h1></p>
          <div style="padding: 5%">
          <a class="btn btn-danger" href="actions/logout.php">Deslogar</a>
          <a class="btn btn-warning" style="background-color: #ffdb0f, color: #000000"  onclick="assina()">Assinar</a>
          </div>
  </div>

</body>
</html>
