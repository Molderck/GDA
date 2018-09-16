<?php

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$query = $conexion->query("SELECT DISTINCT nombreAlimento FROM alimento WHERE estadoAceptacionAlimento='Aceptado'");

echo '<option value="Seleccionar Nombre">Seleccionar Nombre</option>';

while ($row = $query->fetch_assoc()) {
    echo '<option value="' . $row['nombreAlimento'] . '">' . $row['nombreAlimento'] . '</option>' . "\n";
}
