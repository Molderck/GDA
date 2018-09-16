$(function () {
    $.post('ControlGestionAlimentos.php').done(function (respuesta) {
        $('#tablaGestionAlimentos').html(respuesta);
    });
});

