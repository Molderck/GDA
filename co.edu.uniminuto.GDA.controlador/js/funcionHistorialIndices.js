$(function () {
    $.post('ControlHistorialIndices.php').done(function (respuesta) {
        $('#tablaHistorialIndices').html(respuesta);
    });
});

