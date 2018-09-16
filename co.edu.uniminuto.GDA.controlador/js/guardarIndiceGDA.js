function guardarIndiceGDA() {
    var datos = $('#formCalculoGDA').serialize();
    $.ajax({
        type: 'POST',
        url: "../co.edu.uniminuto.GDA.controlador/ControlRegistroGDA.php",
        data: datos
    });

    document.getElementById("nombreAlimentoGDAOpciones").hidden = true;
    document.getElementById("tipologiaAlimentoGDAOpciones").hidden = true;
    document.getElementById("tipologiaAlimentoGDAOpciones").hidden = true;
    document.getElementById("mercadoAlimentoGDAOpciones").hidden = true;
    document.getElementById("asignacionAlimento").hidden = true;
    document.getElementById("botonCalculoGDA").hidden = true;

    document.getElementById("textoActualizarAlimento").hidden = true;
    document.getElementById("textoNuevoAlimento").hidden = true;
    document.getElementById('registroValoracionFallidaRepetida').hidden = true;
    document.getElementById('registroValoracionFallida').hidden = true;
    document.getElementById('registroValoracionExitosa').hidden = true;
    document.getElementById('botonResultadoGDA').hidden = false;
    document.getElementById('botonRecargar').hidden = false;
}

