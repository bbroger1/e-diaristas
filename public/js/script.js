
$(document).ready(function () {
    $('#cep').mask('00.000-000');
    $('#telefone').mask('(00) 00000-0000');
    $('.telefone').mask('(00) 00000-0000');
    $('#cpf').mask('000.000.000-00', {
        reverse: true
    });
});
