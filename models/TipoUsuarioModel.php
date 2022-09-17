<?php

require_once 'config/db.php';

class ClienteModel {

    function getById($id_tipo_usuario) {
        
        $conexion= Database::connect();
        $query = "SELECT id_tipo_usuario, tipo_usuario FROM tipo_usuario WHERE id_tipo_usuario  = '". $id_tipo_usuario ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_tipo_usuario, tipo_usuario FROM tipo_usuario";
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
        $queryInsert = "INSERT INTO tipo_usuario (tipo_usuario) VALUES ('". $data['tipo_usuario']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE tipo_usuario SET tipo_usuario = '".$data['tipo_usuario']."' WHERE id_tipo_usuario = '".$data['id_tipo_usuario']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_tipo_usuario) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM tipo_usuario WHERE id_tipo_usuario ='".$id_tipo_usuario."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>