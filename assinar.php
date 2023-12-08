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
            align-items: left;        
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
        #cvv {
            width: 18%;
            margin-left: 10px;
            margin-right: 20px;
        }
        #cartao {
            width: 55%;
            margin-left: 10px;
            margin-right: 20px;
        }
        #data {
            width: 80%;
            margin-left: 10px;
            margin-right: 20px;
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
    
<button id="botaoSeta" onclick="history.back()"><i class="fa-solid fa-reply"></i></button>
    <form class="form" id="formSenha">
    <h1>Assinatura</h1>
    <div style="display: flex">
    
    <i class="fa-regular fa-credit-card fa-2x"></i>
        <input type="text" id="cartao"  name="nomeM" placeholder="Número do cartão"  maxlength="16"required>

    <i class="fa-solid fa-lock fa-2x"></i>
        <input  type="text" id="cvv"maxlength="3" placeholder="CVV" required >

    </div>
    <div style="display: flex">
        <i class="fa-regular fa-calendar-days fa-2x"></i>
        <input  type="date" id="data" name="senhaS" required>
        </div >

        <button type="button" style="width: auto"class="btn btn-primary" id="btnMod" onclick="assina()">Assinar</button>
    </form>
</body>
</html>
