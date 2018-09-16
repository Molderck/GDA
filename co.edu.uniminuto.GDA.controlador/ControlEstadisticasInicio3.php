<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "gda");
mysqli_set_charset($conexion, "utf8");

$query = $conexion->query("SELECT COUNT(idIndiceGDA) AS IndicesRegistrados FROM indicegda;");

while ($row = $query->fetch_assoc()) {
    echo ' <div class="col-md-4 col-sm-6">
            <div class="statistics">
             <div class="statistics-icon"><i class="fa fa-check-square-o color-3"></i>
             </div>
              <div class="statistics-content">
               <h5><span data-count="' . $row['IndicesRegistrados'] . '" class="statistics-count">' . $row['IndicesRegistrados'] . '</span></h5><span>Indices Calculados</span>
              </div>
             </div>
            </div>';
}

