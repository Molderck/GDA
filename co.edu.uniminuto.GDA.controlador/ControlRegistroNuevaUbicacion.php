<?php

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$query = $conexion->query("SELECT * FROM usuario WHERE placeIDUsuario= '" . $_POST['placeIDUbicacionNueva'] . "' AND idUsuario=' " . $_POST['idUsuario'] . "';");
$registro1 = $query->fetch_assoc();

if ($registro1 == null) {
    $query2 = $conexion->query("UPDATE usuario SET placeIDUsuario='" . $_POST['placeIDUbicacionNueva'] . "' WHERE idUsuario='" . $_POST['idUsuario'] . "';");
    $query3 = $conexion->query("UPDATE usuario SET ubicacionPersona='" . $_POST['ubicacionNueva'] . "' WHERE idUsuario='" . $_POST['idUsuario'] . "';");
    $query4 = $conexion->query("UPDATE usuario SET continenteUsuario='" . $_POST['continenteUsuario'] . "' WHERE idUsuario='" . $_POST['idUsuario'] . "';");
    $query5 = $conexion->query("UPDATE usuario SET paisUsuario='" . $_POST['paisUsuario'] . "' WHERE idUsuario='" . $_POST['idUsuario'] . "';");
    $query6 = $conexion->query("UPDATE usuario SET departamentoRegionUsuario='" . $_POST['departamentoRegionUsuario'] . "' WHERE idUsuario='" . $_POST['idUsuario'] . "';");
    $query7 = $conexion->query("UPDATE usuario SET ciudadMunicipioUsuario='" . $_POST['ciudadMunicipioUsuario'] . "' WHERE idUsuario='" . $_POST['idUsuario'] . "';");
    echo "document.getElementById('nuevaUbicacionExitosa').hidden = false;";
    echo "document.getElementById('nuevaUbicacionFallida').hidden = true;";
    echo "document.getElementById('nuevaUbicacionFallidaRepetida').hidden = true;";
} else {
    echo "document.getElementById('nuevaUbicacionExitosa').hidden = true;";
    echo "document.getElementById('nuevaUbicacionFallida').hidden = true;";
    echo "document.getElementById('nuevaUbicacionFallidaRepetida').hidden = false;";
}
