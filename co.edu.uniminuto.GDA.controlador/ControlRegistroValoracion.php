<?php

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$verificarAlimento = false;
$query = $conexion->query("SELECT * FROM valoracion WHERE Alimento_idAlimento='" . $_POST['idAlimento'] . "';");
while ($row = $query->fetch_assoc()) {
    if ($row['Alimento_idAlimento'] == $_POST['idAlimento'] && $row['codigoReferenciaValoracion'] == $_POST['codigoReferenciaValoracion']) {
        $verificarAlimento = true;
    }
}

if ($verificarAlimento) {
    echo " document.getElementById('registroValoracionFallidaRepetida').hidden = false;";
    echo " document.getElementById('registroValoracionFallida').hidden = true;";
    echo " document.getElementById('registroValoracionExitosa').hidden = true;";
} else {
    $query2 = $conexion->query("SELECT SUM(puntajeCuadrante+puntajeOrigen-puntajeMercado) AS sumaFinal FROM cuadrante, origen, mercado WHERE idCuadrante='" . $_POST['idCuadrante'] . "' AND idOrigen='" . $_POST['idOrigen'] . "' AND idMercado='" . $_POST['idMercado'] . "';");
    while ($row = $query2->fetch_assoc()) {
        $query3 = $conexion->query("INSERT INTO valoracion VALUES('','" . $_POST['idUsuario'] . "','" . $_POST['idAlimento'] . "', '" . $_POST['idOrigen'] . "', '" . $_POST['idCuadrante'] . "', '" . $_POST['idMercado'] . "', '" . date("Y-m-d") . "', '" . $row['sumaFinal'] . "', '" . $_POST['codigoReferenciaValoracion'] . "');");
    }
    echo " document.getElementById('registroValoracionFallidaRepetida').hidden = true;";
    echo " document.getElementById('registroValoracionFallida').hidden = true;";
    echo " document.getElementById('registroValoracionExitosa').hidden = false;";
}





