$(function () {
    $.post('ControlEstadisticas1.php').done(function (respuesta) {
        $('#tablaEstadisticasGDA1').html(respuesta);
    });
});

$(function () {
    $.post('ControlEstadisticas2.php').done(function (respuesta) {
        $('#tablaEstadisticasGDA2').html(respuesta);
    });
});

$(function () {
    $.post('ControlEstadisticas3.php').done(function (respuesta) {
        $('#tablaEstadisticasGDA3').html(respuesta);
    });
});

$(function () {
    $.post('ControlEstadisticas4.php').done(function (respuesta) {
        $('#tablaEstadisticasGDA4').html(respuesta);
    });
});



