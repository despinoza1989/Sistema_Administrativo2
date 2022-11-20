<?php

require_once 'config/db.php';

class NotificacionModel {

    function getById($id_notificaciones) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        id_notificaciones, mensaje_notificacion, estado_notificacion, fecha_notificacion, is_cliente, custom_user_id, custom_option_id, tipo_notificacion 
        FROM notificaciones WHERE id_notificaciones  = '". $id_notificaciones ."'"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT 
        id_notificaciones, mensaje_notificacion, estado_notificacion, fecha_notificacion, is_cliente, custom_user_id, custom_option_id, tipo_notificacion 
        FROM notificaciones";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getByUser($custom_user_id) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        id_notificaciones, mensaje_notificacion, estado_notificacion, fecha_notificacion, is_cliente, custom_user_id, custom_option_id, tipo_notificacion 
        FROM notificaciones WHERE custom_user_id  = '". $custom_user_id ."' ORDER BY fecha_notificacion DESC"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { 
            $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }
    
    function getByUserCount($custom_user_id) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        COUNT(*) AS cantidad
        FROM notificaciones WHERE custom_user_id  = '". $custom_user_id ."' AND estado_notificacion = 0"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {$response = $row;}
        $result->close();
        $conexion->close();
        return $response;
    }


    function create($data) {

        $conexion= Database::connect();
        $queryInsert = "INSERT INTO notificaciones (mensaje_notificacion, estado_notificacion, is_cliente, custom_user_id, custom_option_id, tipo_notificacion) 
        VALUES ('". $data['mensaje_notificacion']."', '0', '". $data['is_cliente']."', '". $data['custom_user_id']."', '". $data['custom_option_id']."', '". $data['tipo_notificacion']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function updateEstado($id_notificaciones) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE notificaciones SET estado_notificacion = '1' WHERE id_notificaciones = '". $id_notificaciones ."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
        
    }

    function delete($id_notificaciones) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM notificaciones WHERE id_notificaciones ='".$id_notificaciones."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>