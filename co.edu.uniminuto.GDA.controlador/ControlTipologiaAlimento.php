<?php

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$nombreAlimentoPHP = $_POST['nombreAlimento'];

$query = $conexion->query("SELECT * FROM alimento WHERE nombreAlimento ='$nombreAlimentoPHP'");

echo '<option value="Seleccionar Tipología">Seleccionar Tipo - Variedad - Marca</option>';

while ($row = $query->fetch_assoc()) {
    echo '<option value="' . $row['idAlimento'] . '">' . $row['tipologiaAlimento'] . '</option>' . "\n";
}