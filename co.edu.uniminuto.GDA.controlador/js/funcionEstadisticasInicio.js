$(function () {
    $.post('../co.edu.uniminuto.GDA.controlador/ControlEstadisticasInicio1.php').done(function (respuesta) {
        $('#estadisticasInicio1').html(respuesta);
    });
});

$(function () {
    $.post('../co.edu.uniminuto.GDA.controlador/ControlEstadisticasInicio2.php').done(function (respuesta) {
        $('#estadisticasInicio2').html(respuesta);
    });
});

$(function () {
    $.post('../co.edu.uniminuto.GDA.controlador/ControlEstadisticasInicio3.php').done(function (respuesta) {
        $('#estadisticasInicio3').html(respuesta);
    });
});


