<?php 
include_once "DBConexion.php";
public function mostrar()
    {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM profesor";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            $conexionDB->cerrarConexion();
            return $resultado;
    } 
