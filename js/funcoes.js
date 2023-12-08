function mostrarDados() {
    $.ajax({
        url: "actions/mostrarDados.php",
        success: function (r) {
            $('#tabelaEstudantes').html(r);
        }
    });
}


function inserirDados() {
    if ($('#nome').val() == "" || $('#email').val() == "" || $('#dataNasc').val() == "" || $('#numTel').val() == "") {
        Swal.fire("Os campos devem ser preenchidos corretamente.");
        return false;
    }

    $.ajax({
        type: "POST",
        data: $("#formInserir").serialize(),
        url: "actions/inserirDados.php",
        success: function (r) {
            console.log(r);
            if (r == 1) {
                $('#formInserir')[0].reset();
                mostrarDados();
                Swal.fire("Sucesso!", "Registro salvo com êxito.", "success");
            } else {
                Swal.fire("Erro!", "Falha ao registrar os dados, tente novamente mais tarde ou contate o suporte", "error");
            }
        }
    });
}

function assina() {
    $.ajax({
        type: "POST",
        data: "",
        url: "actions/assina.php",
        success: function (r) {
            if (r == 1) {
                mostrarDados();
                Swal.fire("Sucesso!", "Atualização feita com êxito.", "success");
            } else {
                Swal.fire("Erro!", "Falha ao atualizar os dados, tente novamente mais tarde ou contate o suporte", "error");
            }
        }
    });

}

function trocasenha() {
    if ($('#nomeS').val() == "" || $('#senhaS').val() == "") {
        return false;
    }

    $.ajax({
        type: "POST",
        data: $("#formSenha").serialize(),
        url: "actions/trocarsenha.php",

        success: function (r) {
            if (r == 1) {
                mostrarDados();
                Swal.fire("Sucesso!", "Atualização feita com êxito.", "success");
            } else {
                Swal.fire("Erro!", "Falha ao atualizar os dados, tente novamente mais tarde ou contate o suporte", "error");
            }
        }
    });

}

function inserirModerador() {
    if ($('#nomeM').val() == "" || $('#senhaS').val() == ""|| $('#emailE').val() == "") {
        return false;
    }

    $.ajax({
        type: "POST",
        data: $("#formMod").serialize(),
        url: "actions/register.php",
        success: function (r) {
            console.log(r);
            if (r == 1) {
                $('#formMod')[0].reset();
                mostrarDados();
                    Swal.fire("Sucesso!", "Registro salvo com êxito.", "success");
                
            } else {
                Swal.fire("Erro!", "Falha ao registrar os dados, tente novamente mais tarde ou contate o suporte", "error");
            }
           
        }
    });
}