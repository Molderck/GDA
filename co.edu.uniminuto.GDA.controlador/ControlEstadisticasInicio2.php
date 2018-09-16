<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$query = $conexion->query("SELECT COUNT(idAlimento) AS AlimentosRegistrados FROM alimento WHERE estadoAceptacionAlimento='Aceptado';");

while ($row = $query->fetch_assoc()) {
    echo ' <div class="col-md-4 col-sm-6">
            <div class="statistics">
             <div class="statistics-icon"><i class="fa fa-shopping-basket color-5"></i>
             </div>
              <div class="statistics-content">
               <h5> <span data-count="' . $row['AlimentosRegistrados'] . '" class="statistics-count">' . $row['AlimentosRegistrados'] . '</span></h5><span>Alimentos Registrados</span>
              </div>
             </div>
            </div>';
}

