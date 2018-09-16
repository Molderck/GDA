<?php

class Database {

    private $servidor;
    private $usuario;
    private $clave;
    private $nombreBD;

    function Database() {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->clave = "";
        $this->nombreBD = "gda";
    }

    function conectar() {
        $link = mysql_connect($this->servidor, $this->usuario, $this->clave);
        mysql_select_db($this->nombreBD, $link);
        mysql_set_charset('utf8');
    }

    function insertar($tabla, $valores = array()) {
        $valoresfila = "";
        while (list($key, $val) = each($valores)) {
            $valoresfila = $valoresfila . "'" . $val . "', ";
        }
        $valoresfila = substr($valoresfila, 0, -2);
        mysql_query("insert into " . $tabla . " values(" . $valoresfila . ");");
    }

    function consultar($tabla, $opcion, $valor) {
        if ($opcion == "") {
            $consulta = mysql_query("select * from " . $tabla . ";");
        } else {
            $consulta = mysql_query("select * from " . $tabla . " WHERE " . $opcion . " = '" . $valor . "';");
        }

        return $consulta;
    }

    function consultarFiltro($tabla, $opcion, $valor, $opcion2, $filtro) {
        $consulta = mysql_query("select * from " . $tabla . " WHERE " . $opcion . " = '" . $valor . "' AND " . $opcion2 . " = ' " . $filtro . "';");
        return $consulta;
    }

    function calcularPuntajeValoracion($idCuadrante, $idOrigen, $idMercado) {
        $consulta = mysql_query("SELECT SUM(puntajeCuadrante+puntajeOrigen-puntajeMercado) AS sumaFinal FROM cuadrante, origen, mercado WHERE idCuadrante='" . $idCuadrante . "' AND idOrigen='" . $idOrigen . "' AND idMercado='" . $idMercado . "'");
        return $consulta;
    }

    function calcularIndiceGDA($codigoReferenciaValoracion) {
        $consulta = mysql_query("SELECT COUNT(puntajeValoracion)*10/SUM(puntajeValoracion) as indiceGDA FROM valoracion WHERE codigoReferenciaValoracion='" . $codigoReferenciaValoracion . "';");
        return $consulta;
    }

    function editar($tabla, $columna, $campo, $argumento, $id) {
        $consulta = mysql_query("UPDATE " . $tabla . " SET " . $columna . "='" . $campo . "' WHERE " . $argumento . "='" . $id . "';");
        return $consulta;
    }

    function eliminar($tabla, $columna, $id) {
        $consulta = mysql_query("DELETE FROM " . $tabla . " WHERE " . $columna . " ='" . $id . "';");
        return $consulta;
    }

}
