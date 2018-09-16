<?php

include "../co.edu.uniminuto.GDA.vista/Inicio.php";

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

if (isset($_POST['Registrarse'])) {
    if ($_POST['continenteUsuario'] == "") {
        echo "<script>document.getElementById('registroFallidoVacio').hidden = false;</script>";
    } else {
        $query = $conexion->query("SELECT * FROM usuario WHERE correoUsuario='" . $_POST['correoUsuario'] . "';");
        $registro1 = $query->fetch_assoc();
        if ($registro1 == null) {
            $query2 = $conexion->query("INSERT INTO usuario VALUES('','" . $_POST['nombresUsuario'] . "','" . $_POST['apellidosUsuario'] . "', '" . $_POST['fechaNacimientoUsuario'] . "', '" . $_POST['continenteUsuario'] . "', '" . $_POST['paisUsuario'] . "', '" . $_POST{'departamentoRegionUsuario'} . "', '" . $_POST['ciudadMunicipioUsuario'] . "', '" . $_POST['placeIDUsuario'] . "', '" . $_POST['ubicacionPersona'] . "', '" . $_POST['correoUsuario'] . "', '" . $_POST['contraseñaUsuario'] . "', 'Cliente', '" . $_POST['ocupacionUsuario'] . "');");
            echo "<script>document.getElementById('registroExitoso').hidden = false;</script>";
        } else {
            echo "<script>document.getElementById('registroFallido').hidden = false;</script>";
        }
    }
}



