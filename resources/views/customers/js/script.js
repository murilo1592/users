$(document).ready(function () {

    setInterval(updateTotalUsers, 3000);

    $('#telephone').mask('(00) 0000-00000');
    $('#cpf').mask('000.000.000-00');
    $('#city').prop('disabled', true);

    var states = estados();

    states.map(function (item) {
        $('#states').append(`<option value="${item.value}">${item.label}</option>`);
    });

    $('#states').change(function () {
        getCities($('#states').val());
    });
});

async function buscarEndereco(cep) {

    await $.getJSON("https://viacep.com.br/ws/" + cep + "/json?callback=?", function (dados) {

        if (!("erro" in dados)) {

            $('#endereco').val(`${dados.logradouro}, ${dados.bairro}, ${dados.localidade} - ${dados.uf}`).attr('disabled', false);

            return;
        }

    }, 'json').catch(function () {

        $('#endereco').val('').attr('disabled', false);
    })
}

function estados() {

    const data = [
        {value: 'AC', label: 'Acre'},
        {value: 'AL', label: 'Alagoas'},
        {value: 'AP', label: 'Amapá'},
        {value: 'AM', label: 'Amazonas'},
        {value: 'BA', label: 'Bahia'},
        {value: 'CE', label: 'Ceará'},
        {value: 'DF', label: 'Distrito Federal'},
        {value: 'ES', label: 'Espírito Santo'},
        {value: 'GO', label: 'Goías'},
        {value: 'MA', label: 'Maranhão'},
        {value: 'MT', label: 'Mato Grosso'},
        {value: 'MS', label: 'Mato Grosso do Sul'},
        {value: 'MG', label: 'Minas Gerais'},
        {value: 'PA', label: 'Pará'},
        {value: 'PB', label: 'Paraíba'},
        {value: 'PR', label: 'Paraná'},
        {value: 'PE', label: 'Pernambuco'},
        {value: 'PI', label: 'Piauí'},
        {value: 'RJ', label: 'Rio de Janeiro'},
        {value: 'RN', label: 'Rio Grande do Norte'},
        {value: 'RS', label: 'Rio Grande do Sul'},
        {value: 'RO', label: 'Rondônia'},
        {value: 'RR', label: 'Roraíma'},
        {value: 'SC', label: 'Santa Catarina'},
        {value: 'SP', label: 'São Paulo'},
        {value: 'SE', label: 'Sergipe'},
        {value: 'TO', label: 'Tocantins'},
    ];

    return data;
}

function getCities(estado) {
    $('#city').html(`<option value="null" selected disabled>Escolha uma cidade</option>`);

    $.ajax({
        type: 'GET',
        url: 'http://api.londrinaweb.com.br/PUC/Cidades/' + estado + '/BR/0/10000',
        contentType: "application/json; charset=utf-8",
        dataType: "jsonp",
        async: false
    }).done(function (response) {

        $.each(response, function (c, city) {
            $('#city').append(`<option value="${city}">${city}</option>`);
        });

        $('#city').prop('disabled', false);
    });
}

function updateTotalUsers() {

    $.get('http://127.0.0.1:8000/customer/total', {}, function (data) {
        $('#count_users').text(data);
    }, 'json');

    var dateNow = new Date();
    var strDate = dateNow.getDate() + "/" + (dateNow.getMonth() + 1) + "/" + dateNow.getFullYear();
    $('#update_count_users').text(strDate);
}
