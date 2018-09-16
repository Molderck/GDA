function asignarGDAFinal() {
    $.ajax({
        type: 'GET',
        url: "../co.edu.uniminuto.GDA.controlador/ControlGDAFinal.php?idUsuario=" + document.getElementById("idUsuario").value + "&codRef=" + document.getElementById("codigoReferenciaValoracion").value,
        success: function (r) {
            document.getElementById("sliderGDA").setAttribute("value", r);
            document.getElementById("valorGDASlider").innerHTML = r;
            if (r >= 1 && r <= 2) {
                document.getElementById("textoGDASlider").innerHTML = "Tu GDA es de base: LOCAL.";
            } else {
                if (r >= 2.1 && r <= 3) {
                    document.getElementById("textoGDASlider").innerHTML = "Tu GDA es de base: REGIONAL.";
                } else {
                    if (r >= 3.1 && r <= 4) {
                        document.getElementById("textoGDASlider").innerHTML = "Tu GDA es de base: NACIONAL.";
                    } else {
                        if (r >= 4.1 && r <= 5) {
                            document.getElementById("textoGDASlider").innerHTML = "Tu GDA es de base: INTERNACIONAL.";
                        }
                    }
                }
            }
        }
    });
}