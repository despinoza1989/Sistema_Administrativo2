<?php

require_once 'config/db.php';

class EstadoCivilModel {

    function getById($id_estado_civil) {
        
        $conexion= Database::connect();
        $query = "SELECT id_estado_civil, tipo_estado_civil FROM estado_civil WHERE id_estado_civil  = '". $id_estado_civil ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_estado_civil, tipo_estado_civil FROM estado_civil";
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
        $queryInsert = "INSERT INTO estado_civil (tipo_estado_civil) VALUES ('". $data['tipo_estado_civil']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE estado_civil SET tipo_estado_civil = '".$data['tipo_estado_civil']."' WHERE id_estado_civil = '".$data['id_estado_civil']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_estado_civil) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM estado_civil WHERE id_estado_civil ='".$id_estado_civil."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>