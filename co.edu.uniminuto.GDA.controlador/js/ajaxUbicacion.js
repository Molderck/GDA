function asignarUbicacion() {
    var nombreAlimentoParametro = document.getElementById("nombreAlimentoGDA").options[document.getElementById("nombreAlimentoGDA").selectedIndex].text;
    var tipologiaAlimentoParametro = document.getElementById("tipologiaAlimentoGDA").options[document.getElementById("tipologiaAlimentoGDA").selectedIndex].text;
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlUbicacion.php?nomb=" + nombreAlimentoParametro + "&tip=" + tipologiaAlimentoParametro;
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("refFullAddress").value = this.responseText;
        }
    };
}

function asignarUbicacionUsuario() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlUbicacionUsuario.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("referenciaUbicacionUsuario").value = this.responseText;
        }
    };
}

function  asignarContinenteUsuario() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlContinenteUsuario.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("continenteUsuarioReferenciaGDA").value = this.responseText;
        }
    };
}

function  asignarPaisUsuario() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlPaisUsuario.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("paisUsuarioReferenciaGDA").value = this.responseText;
        }
    };
}

function  asignarDepartamentoRegionUsuario() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlDepartamentoRegionUsuario.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("departamentoRegionUsuarioReferenciaGDA").value = this.responseText;
        }
    };
}

function  asignarCiudadMunicipioUsuario() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "../co.edu.uniminuto.GDA.controlador/ControlCiudadMunicipioUsuario.php";
    var asynchronous = true;

    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ciudadMunicipioUsuarioReferenciaGDA").value = this.responseText;
        }
    };
}


