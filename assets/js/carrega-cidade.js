function carregaComboCidade() {
    $("#estado").on("change", function () {
        let estado = $("#estado").val();
        eventoComboCidade(estado);
        //console.log(estado);
    });
}

function eventoComboCidade(estado) {
    $("#cidade").html("");

    $.ajax({
        method: "POST",
        cache: false,
        async: false,
        url: "../../actions/dados-cidades.php",
        data: { estado: estado }
    }).done(function (data) {
        //console.log(data);
        let dados = "";
        if (data != "") {
            for (var i = 0; i < data.length; i++) {
                dados += `<option value="${data[i].id}">${data[i].nome}</option>`;
            }
            $("#cidade").append(dados);
        }
    }).fail(function (response) {
        console.log(response);
    });
}

carregaComboCidade();