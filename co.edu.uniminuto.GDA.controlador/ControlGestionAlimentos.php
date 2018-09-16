<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$query = $conexion->query("SELECT * FROM alimento WHERE estadoAceptacionAlimento='Pendiente';");

echo '<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

<table id="customers">
  <tr>
    <th>Nombre Alimento:</th>
    <th>Tipo - Variedad - Marca Alimento:</th>
    <th>Ubicación Alimento:</th>
  </tr>';

while ($row = $query->fetch_assoc()) {
    echo '<tr>
    <td>' . $row['nombreAlimento'] . '</td>
    <td>' . $row['tipologiaAlimento'] . '</td>
    <td>' . $row['ubicacionAlimento'] . '</td>
    <td><form method="POST" action="../co.edu.uniminuto.GDA.controlador/ControlGestionarEstadoAlimento.php#gestionarAlimentos"><input type="text" id="gestionIdAlimento" name="gestionIdAlimento" value="' . $row['idAlimento'] . '" hidden="true"><input type="submit" id="Aceptar" name="Aceptar" value="Aceptar" class="btn btn-success"> <input type="submit" id="Rechazar" name="Rechazar" value="Rechazar" class="btn btn-danger"></form></td>    
</tr>';
}
echo '</table>';


