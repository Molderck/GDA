<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");
$query = $conexion->query("SELECT * FROM indicegda WHERE Usuario_idUsuario = '" . $_GET['idUsuario'] . "' AND codigoReferenciaValoraciones='" . $_GET['codRef'] . "'");

while ($row = $query->fetch_assoc()) {
    echo $row["valorIndiceGDA"];
}
