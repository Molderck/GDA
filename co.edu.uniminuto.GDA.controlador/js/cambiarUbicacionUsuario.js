function guardarNuevaUbicacion() {
    var datos = $('#formCalculoGDA').serialize();

    if ($('input[name=continenteUsuario]').val() == '') {
        document.getElementById("nuevaUbicacionExitosa").hidden = true;
        document.getElementById("nuevaUbicacionFallida").hidden = false;
        document.getElementById("nuevaUbicacionFallidaRepetida").hidden = true;
    } else {
        $.ajax({
            type: 'POST',
            url: "../co.edu.uniminuto.GDA.controlador/ControlRegistroNuevaUbicacion.php",
            data: datos,
            success: function (r) {
                eval(r);
                asignarUbicacionUsuario();
                asignarContinenteUsuario();
                asignarPaisUsuario();
                asignarDepartamentoRegionUsuario();
                asignarCiudadMunicipioUsuario();
            }
        });
    }
}

