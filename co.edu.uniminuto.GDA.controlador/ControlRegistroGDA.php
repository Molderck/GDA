<?php

include_once 'Database.php';
include "../co.edu.uniminuto.GDA.vista/NavegacionCliente.php";

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$query = $conexion->query("SELECT ROUND(COUNT(puntajeValoracion)*10/SUM(puntajeValoracion),1) as indiceGDA FROM valoracion WHERE codigoReferenciaValoracion='" . $_POST['codigoReferenciaValoracion'] . "';");
while ($row = $query->fetch_assoc()) {
    $query = $conexion->query("INSERT INTO indicegda VALUES('','" . $_POST['idUsuario'] . "','" . date("Y-m-d") . "', '" . $row['indiceGDA'] . "', '" . $_POST['codigoReferenciaValoracion'] . "', '" . $_POST['continenteUsuarioReferenciaGDA'] . "', '" . $_POST['paisUsuarioReferenciaGDA'] . "', '" . $_POST['departamentoRegionUsuarioReferenciaGDA'] . "', '" . $_POST['ciudadMunicipioUsuarioReferenciaGDA'] . "');");
}




