

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

</head>

<body class="corpo">
    
        <!-- Inicio Tabela -->
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
            <span class="btn btn-secondary" data-toggle="modal" data-target="#modalMod">Cadastrar novo moderador</span>
        </div>
        <!-- Fim Tabela -->
    

    <!-- Inicio Modal de inserção -->
    <div class="modal fade" id="modalInsert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inserir um novo estudante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form" id="formInserir">

                        <div class="form_grupo">
                            <label class="form_label">Nome</label>
                            <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
                        </div>

                        <div class="form_grupo">
                            <label class="form_label">Email</label>
                            <input type="email" name="email" class="form_input" id="email"
                                placeholder="seuemail@email.com" required>
                        </div>

                        <div class="form_grupo">
                            <label class="form_label">Data de Nascimento</label>
                            <input type="date" name="dataNasc" class="form_input" id="dataNasc"
                                placeholder="Data de Nascimento" required>
                        </div>
                        <div class="form_grupo">

                            <div class="form_grupo">
                                <label class="form_label">Número de telefone</label>
                                <input type="tel" name="numTel" class="form_input" id="numTel" maxlength="15"
                                    placeholder="Informe seu telefone sem o DDD" onkeyup="handlePhone(event)" required>
                            </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btnInserir"
                        onclick="inserirDados()">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Fim Modal de inserção -->

    <!-- Inicio Modal de Edição -->
    <div class="modal fade" id="modalEdicao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar dados do estudante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form" id="formEdicao">

                        <input type="text" id="idE" name="idE" hidden="">

                        <div class="form_grupo">
                            <label class="form_label">Nome</label>
                            <input type="text" name="nomeE" class="form_input" id="nomeE" placeholder="Nome" required>
                        </div>

                        <div class="form_grupo">
                            <label class="form_label">Email</label>
                            <input type="email" name="emailE" class="form_input" id="emailE"
                                placeholder="seuemail@email.com" required>
                        </div>

                        <div class="form_grupo">
                            <label class="form_label">Data de Nascimento</label>
                            <input type="date" name="dataNascE" class="form_input" id="dataNascE"
                                placeholder="Data de Nascimento" required>
                        </div>
                        <div class="form_grupo">

                            <div class="form_grupo">
                                <label class="form_label">Número de telefone</label>
                                <input type="tel" name="numTelE" class="form_input" id="numTelE" maxlength="15"
                                    placeholder="Informe seu telefone sem o DDD" onkeyup="handlePhone(event)" required>
                            </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-warning" data-dissmis="modal" onclick="enviaNovoDado()">Salvar
                        mudanças</button>
                </div>
            </div>
        </div>

    </div>

    </div>


    <!-- Fim Modal de Edição -->

    <!-- Inicio Modal moderação -->

    <div class="modal fade" id="modalMod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar um novo moderador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form class="form" id="formMod">

                        <div class="form_grupo">
                            <label class="form_label">Nome</label>
                            <input type="text" name="nomeM" class="form_input" id="nomeM" placeholder="Nome" required>
                        </div>

                        <div class="form_grupo">
                            <label class="form_label">Senha</label>
                            <input type="password" name="senha" class="form_input" id="senha" placeholder="************"
                                required>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btnMod"
                        onclick="inserirModerador()">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Fim Modal moderação -->

    <script type="text/javascript">
        $(document).ready(function () {
            mostrarDados();
        });
    </script>

    <script>
        const handlePhone = (event) => {
            let input = event.target
            input.value = phoneMask(input.value)
        }

        const phoneMask = (value) => {
            if (!value) return ""
            value = value.replace(/\D/g, '')
            value = value.replace(/(\d{2})(\d)/, "($1) $2")
            value = value.replace(/(\d)(\d{4})$/, "$1-$2")
            return value
        }

    </script>

</body>

</html>