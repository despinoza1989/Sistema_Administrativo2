<?php

require_once 'config/db.php';

class TipoAsesoriaModel {

    function getById($id_tipo_asesoria) {
        
        $conexion= Database::connect();
        $query = "SELECT id_tipo_asesoria, tipo_asesoria FROM tipo_asesoria WHERE id_tipo_asesoria  = '". $id_tipo_asesoria ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_tipo_asesoria, tipo_asesoria FROM tipo_asesoria";
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
        $queryInsert = "INSERT INTO tipo_asesoria (tipo_asesoria) VALUES ('". $data['tipo_asesoria']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE tipo_asesoria SET tipo_asesoria = '".$data['tipo_asesoria']."' WHERE id_tipo_asesoria = '".$data['id_tipo_asesoria']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_tipo_asesoria) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM tipo_asesoria WHERE id_tipo_asesoria ='".$id_tipo_asesoria."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>