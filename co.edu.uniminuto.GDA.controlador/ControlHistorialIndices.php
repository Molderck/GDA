<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

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
</style>';

$query = $conexion->query("SELECT * FROM indicegda WHERE Usuario_idUsuario='" . $_SESSION['idUsuarioLogin'] . "';");

echo '<br><table id="customers">
  <tr>
    <th>Continente Usuario:</th>
    <th>País Usuario:</th>
    <th>Departamento - Región Usuario:</th>
    <th>Ciudad - Municipio Usuario:</th>
    <th>Fecha Indice GDA:</th>
    <th>Indice GDA:</th>
   </tr>';

while ($row = $query->fetch_assoc()) {
    echo '<tr>
    <td>' . $row['continenteUsuario'] . '</td>
    <td>' . $row['paisUsuario'] . '</td>
    <td>' . $row['departamentoRegionUsuario'] . '</td>
    <td>' . $row['ciudadMunicipioUsuario'] . '</td>
    <td>' . $row['fechaIndiceGDA'] . '</td>
    <td>' . $row['valorIndiceGDA'] . '</td>
    </tr>';
}
echo '</table>';

