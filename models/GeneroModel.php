<?php

require_once 'config/db.php';

class GeneroModel {

    function getById($id_genero) {
        
        $conexion= Database::connect();
        $query = "SELECT id_genero, tipo_genero FROM genero WHERE id_genero  = '". $id_genero ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_genero, tipo_genero FROM genero";
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
        $queryInsert = "INSERT INTO genero (tipo_genero) VALUES ('". $data['tipo_genero']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE genero SET tipo_genero = '".$data['tipo_genero']."' WHERE id_genero = '".$data['id_genero']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_genero) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM genero WHERE id_genero ='".$id_genero."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>