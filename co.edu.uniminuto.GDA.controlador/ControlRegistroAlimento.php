<?php

include_once 'Database.php';
//include "../co.edu.uniminuto.GDA.vista/NavegacionCliente.php";

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$query = $conexion->query("SELECT * FROM alimento WHERE nombreAlimento='" . $_POST['nombreAlimento'] . "';");
$registro1 = $query->fetch_assoc();
if ($registro1 == null) {
    $query = $conexion->query("INSERT INTO alimento VALUES('','" . $_POST['nombreAlimento'] . "','" . $_POST['tipologiaAlimento'] . "', '" . $_POST['continenteAlimento'] . "', '" . $_POST['paisAlimento'] . "', '" . $_POST['departamentoRegionAlimento'] . "', '" . $_POST{'ciudadMunicipioAlimento'} . "', '" . $_POST['placeIDAlimentoNuevo'] . "', '" . $_POST['ubicacionAlimentoNuevo'] . "', 'Pendiente');");
    echo "document.getElementById('registroAlimentoExitoso').hidden = false;";
    echo "document.getElementById('registroAlimentoFallido').hidden = true;";
    echo "document.getElementById('registroAlimentoFallidoRepetido').hidden = true;";
} else {
    $query2 = $conexion->query("SELECT * FROM alimento WHERE tipologiaAlimento='" . $_POST['tipologiaAlimento'] . "';");
    $registro2 = $query2->fetch_assoc();
    if ($registro2 == null) {
        $query3 = $conexion->query("INSERT INTO alimento VALUES('','" . $_POST['nombreAlimento'] . "','" . $_POST['tipologiaAlimento'] . "', '" . $_POST['continenteAlimento'] . "', '" . $_POST['paisAlimento'] . "', '" . $_POST['departamentoRegionAlimento'] . "', '" . $_POST{'ciudadMunicipioAlimento'} . "', '" . $_POST['placeIDAlimentoNuevo'] . "', '" . $_POST['ubicacionAlimentoNuevo'] . "', 'Pendiente');");
        echo "document.getElementById('registroAlimentoExitoso').hidden = false;";
        echo "document.getElementById('registroAlimentoFallido').hidden = true;";
        echo "document.getElementById('registroAlimentoFallidoRepetido').hidden = true;";
    } else {
        echo "document.getElementById('registroAlimentoFallidoRepetido').hidden = false;";
        echo "document.getElementById('registroAlimentoExitoso').hidden = true;";
        echo "document.getElementById('registroAlimentoFallido').hidden = true";
    }
}




