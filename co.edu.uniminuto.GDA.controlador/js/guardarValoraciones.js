function guardarValoracion() {
    var datos = $('#formCalculoGDA').serialize();

    $.ajax({
        type: 'POST',
        url: "../co.edu.uniminuto.GDA.controlador/ControlRegistroValoracion.php",
        data: datos,
        success: function (r) {
            eval(r);
        }
    });

}

