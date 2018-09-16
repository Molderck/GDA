function  asignarID() {
    var nombreAlimentoParametro = document.getElementById("nombreAlimentoGDA").options[document.getElementById("nombreAlimentoGDA").selectedIndex].text;
    var tipologiaAlimentoParametro = document.getElementById("tipologiaAlimentoGDA").options[document.getElementById("tipologiaAlimentoGDA").selectedIndex].text;

    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlID.php?nomb=" + nombreAlimentoParametro + "&tip=" + tipologiaAlimentoParametro;
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("refPlaceID").value = this.responseText;
        }
    };
}

function  asignarIDUsuario() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlIDUsuario.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("refPlaceIDUsuario").value = this.responseText;
        }
    };
}

function  asignarPKUsuario() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlPKUsuario.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("idUsuario").value = this.responseText;
        }
    };
}

function asignarPKAlimento() {
    document.getElementById("idAlimento").value = document.getElementById("tipologiaAlimentoGDA").value;
}

function asignarPKMercado() {
    document.getElementById("idMercado").value = document.getElementById("mercadoAlimentoGDA").value;
}