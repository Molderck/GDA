<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$query = $conexion->query("SELECT COUNT(idUsuario) AS Registrados FROM usuario WHERE tipoUsuario <> 'Administrador';");

while ($row = $query->fetch_assoc()) {
    echo '<div class="col-md-4 col-sm-6">
           <div class="statistics">
            <div class="statistics-icon"><i class="fa fa-users color-1"></i>
            </div>
             <div class="statistics-content">
              <h5><span data-count="' . $row['Registrados'] . '" class="statistics-count">' . $row['Registrados'] . '</span></h5><span>Usuarios Registrados</span>
             </div>
            </div>
           </div>';
}

