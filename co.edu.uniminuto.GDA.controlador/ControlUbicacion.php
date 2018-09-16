<?php

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");
$query = $conexion->query("SELECT * FROM alimento WHERE nombreAlimento = '" . $_GET['nomb'] . "' AND tipologiaAlimento = '" . $_GET['tip'] . "'");

while ($row = $query->fetch_assoc()) {
    echo $row["ubicacionAlimento"];
}
