function guardarNuevoAlimento() {
    var datos = $('#formCalculoGDA').serialize();
    if ($('input[name=continenteAlimento]').val() == '' || $('input[name=nombreAlimento]').val() == '' || $('input[name=tipologiaAlimento]').val() == '') {
        document.getElementById("registroAlimentoExitoso").hidden = true;
        document.getElementById("registroAlimentoFallidoRepetido").hidden = true;
        document.getElementById("registroAlimentoFallido").hidden = false;
    } else {
        $.ajax({
            type: 'POST',
            url: "../co.edu.uniminuto.GDA.controlador/ControlRegistroAlimento.php",
            data: datos,
            success: function (r) {
                eval(r);
            }
        });
    }
}

