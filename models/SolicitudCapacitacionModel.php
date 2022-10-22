<?php

require_once 'config/db.php';

class SolicitudCapacitacionModel {

    function getById($id_solicitud_capacitacion) {
        
        $conexion= Database::connect();
        $query = "SELECT
        s.id_solicitud_capacitacion, s.nombre_solicitud_capacitacion, s.fecha_solicitud_capacitacion, s.id_tipo_personal_s,
        s.id_cliente_s, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, 
        c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.password_cliente, c.tipo_usuario_c,
        c.id_rubro, t.tipo_personal_capacitacion
        FROM solicitud_capacitacion AS s
        LEFT JOIN cliente AS c ON s.id_cliente_s = c.id_cliente
        LEFT JOIN tipo_personal_capacitacion AS t ON t.id_tipo_personal_capacitacion = s.id_tipo_personal_s 
        WHERE s.id_solicitud_capacitacion = '". $id_solicitud_capacitacion ."'";
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
        s.id_solicitud_capacitacion, s.nombre_solicitud_capacitacion, s.fecha_solicitud_capacitacion, s.id_tipo_personal_s,
        s.id_cliente_s, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, 
        c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.password_cliente, c.tipo_usuario_c,
        c.id_rubro, t.tipo_personal_capacitacion
        FROM solicitud_capacitacion AS s
        LEFT JOIN cliente AS c ON s.id_cliente_s = c.id_cliente
        LEFT JOIN tipo_personal_capacitacion AS t ON t.id_tipo_personal_capacitacion = s.id_tipo_personal_s";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }


    function getByIdCliente($id_personal_ap) {
        
        $conexion= Database::connect();
        $query = "SELECT
        s.id_solicitud_capacitacion, s.nombre_solicitud_capacitacion, s.fecha_solicitud_capacitacion, s.id_tipo_personal_s,
        s.id_cliente_s, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, 
        c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.password_cliente, c.tipo_usuario_c,
        c.id_rubro, t.tipo_personal_capacitacion
        FROM solicitud_capacitacion AS s
        LEFT JOIN cliente AS c ON s.id_cliente_s = c.id_cliente
        LEFT JOIN tipo_personal_capacitacion AS t ON t.id_tipo_personal_capacitacion = s.id_tipo_personal_s
        LEFT JOIN asignacion_profesional AS ap ON ap.id_cliente_ap = s.id_cliente_s
        WHERE ap.id_personal_ap  = '". $id_personal_ap ."'"; 
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
        $queryInsert = "INSERT INTO solicitud_capacitacion (nombre_solicitud_capacitacion, fecha_solicitud_capacitacion, id_cliente_s, id_tipo_personal_s) VALUES ('". $data['nombre_solicitud_capacitacion']."', '". $data['fecha_solicitud_capacitacion']."', '". $data['id_cliente_s']."', '". $data['id_tipo_personal_s']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE solicitud_capacitacion SET nombre_solicitud_capacitacion = '".$data['nombre_solicitud_capacitacion']."', fecha_solicitud_capacitacion = '".$data['fecha_solicitud_capacitacion']."', id_cliente_s = '".$data['id_cliente_s']."', id_tipo_personal_s = '".$data['id_tipo_personal_s']."' WHERE id_solicitud_capacitacion = '".$data['id_solicitud_capacitacion']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_solicitud_capacitacion) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM solicitud_capacitacion WHERE id_solicitud_capacitacion ='".$id_solicitud_capacitacion."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>