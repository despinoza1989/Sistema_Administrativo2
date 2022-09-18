<?php

require_once 'config/db.php';

class TipoDocumentoModel {

    function getById($id_tipo_documento) {
        
        $conexion= Database::connect();
        $query = "SELECT id_tipo_documento, tipo_documento FROM tipo_documento WHERE id_tipo_documento  = '". $id_tipo_documento ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_tipo_documento, tipo_documento FROM tipo_documento";
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
        $queryInsert = "INSERT INTO tipo_documento (tipo_documento) VALUES ('". $data['tipo_documento']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE tipo_documento SET tipo_documento = '".$data['tipo_documento']."' WHERE id_tipo_documento = '".$data['id_tipo_documento']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_tipo_documento) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM tipo_documento WHERE id_tipo_documento ='".$id_tipo_documento."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>