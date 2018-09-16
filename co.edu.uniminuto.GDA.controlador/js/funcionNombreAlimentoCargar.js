function recargarNombreAlimento() {
    $.ajax({
        type: 'POST',
        url: "../co.edu.uniminuto.GDA.controlador/ControlNombreAlimento.php",
        success(r) {
            $('#nombreAlimentoGDA').html(r);
        }
    });
}

