<?php

require_once 'config/db.php';

class TipoPersonalCapacitacionModel {

    function getById($id_tipo_personal_capacitacion) {
        
        $conexion= Database::connect();
        $query = "SELECT id_tipo_personal_capacitacion, tipo_personal_capacitacion FROM tipo_personal_capacitacion WHERE id_tipo_personal_capacitacion  = '". $id_tipo_personal_capacitacion ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_tipo_personal_capacitacion, tipo_personal_capacitacion FROM tipo_personal_capacitacion";
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
        $queryInsert = "INSERT INTO tipo_personal_capacitacion (tipo_personal_capacitacion) VALUES ('". $data['tipo_personal_capacitacion']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE tipo_personal_capacitacion SET tipo_personal_capacitacion = '".$data['tipo_personal_capacitacion']."' WHERE id_tipo_personal_capacitacion = '".$data['id_tipo_personal_capacitacion']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_tipo_personal_capacitacion) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM tipo_personal_capacitacion WHERE id_tipo_personal_capacitacion ='".$id_tipo_personal_capacitacion."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>