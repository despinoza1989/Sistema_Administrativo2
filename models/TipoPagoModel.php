<?php

require_once 'config/db.php';

class TipoPagoModel {

    function getById($id_tipo_pago) {
        
        $conexion= Database::connect();
        $query = "SELECT id_tipo_pago, tipo_pago FROM tipo_pago WHERE id_tipo_pago  = '". $id_tipo_pago ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_tipo_pago, tipo_pago FROM tipo_pago";
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
        $queryInsert = "INSERT INTO tipo_pago (tipo_pago) VALUES ('". $data['tipo_pago']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE tipo_pago SET tipo_pago = '".$data['tipo_pago']."' WHERE id_tipo_pago = '".$data['id_tipo_pago']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_tipo_pago) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM tipo_pago WHERE id_tipo_pago ='".$id_tipo_pago."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>