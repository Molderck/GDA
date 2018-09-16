<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");
$query = $conexion->query("SELECT * FROM usuario WHERE correoUsuario = '" . $_SESSION['correoUsuarioLogin'] . "'");

while ($row = $query->fetch_assoc()) {
    echo $row["ciudadMunicipioUsuario"];
}
