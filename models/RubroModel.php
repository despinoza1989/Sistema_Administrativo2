<?php

require_once 'config/db.php';

class RubroModel {

    function getById($id_rubro) {
        
        $conexion= Database::connect();
        $query = "SELECT id_rubro, tipo_rubro FROM rubro WHERE id_rubro  = '". $id_rubro ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_rubro, tipo_rubro FROM rubro ORDER BY tipo_rubro";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function create($data) {

        $conexion= Database::connect();
        $queryInsert = "INSERT INTO rubro (tipo_rubro) VALUES ('". $data['tipo_rubro']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE rubro SET tipo_rubro = '".$data['tipo_rubro']."' WHERE id_rubro = '".$data['id_rubro']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_rubro) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM rubro WHERE id_rubro ='".$id_rubro."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>