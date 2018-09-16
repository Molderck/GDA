<?php

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");



if (isset($_POST['Aceptar'])) {
    include "../co.edu.uniminuto.GDA.vista/NavegacionAdministrador.php";
    $query = $conexion->query("UPDATE alimento SET estadoAceptacionAlimento='Aceptado' WHERE idAlimento='" . $_POST['gestionIdAlimento'] . "';");
}

if (isset($_POST['Rechazar'])) {
    include "../co.edu.uniminuto.GDA.vista/NavegacionAdministrador.php";
    $query = $conexion->query("DELETE FROM alimento WHERE idAlimento='" . $_POST['gestionIdAlimento'] . "';");
} 



