<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

if (isset($_POST['Acceder'])) {
    $verificarUsuario = false;
    $cliente = false;
    $administrador = false;
    $query = $conexion->query("SELECT * FROM usuario;");
    while ($row = $query->fetch_assoc()) {
        if ($row['correoUsuario'] == $_POST['correoUsuarioLogin'] && $row['contraseñaUsuario'] == $_POST['contraseñaUsuarioLogin'] && $row['tipoUsuario'] == "Cliente") {
            $verificarUsuario = true;
            $cliente = true;
            $_SESSION['idUsuarioLogin'] = $row['idUsuario'];
        } else {
            if ($row['correoUsuario'] == $_POST['correoUsuarioLogin'] && $row['contraseñaUsuario'] == $_POST['contraseñaUsuarioLogin'] && $row['tipoUsuario'] == "Administrador") {
                $verificarUsuario = true;
                $administrador = true;
                $_SESSION['idUsuarioLogin'] = $row['idUsuario'];
            }
        }
    }

    if ($verificarUsuario) {
        if ($cliente) {
            $_SESSION['correoUsuarioLogin'] = $_POST['correoUsuarioLogin'];
            include '../co.edu.uniminuto.GDA.vista/NavegacionCliente.php';
        } else {
            if ($administrador) {
                $_SESSION['correoUsuarioLogin'] = $_POST['correoUsuarioLogin'];
                include '../co.edu.uniminuto.GDA.vista/NavegacionAdministrador.php';
            }
        }
    } else {
        include "../co.edu.uniminuto.GDA.vista/Inicio.php";
        echo "<script>document.getElementById('sesionFallida').hidden = false;</script>";
    }
}    