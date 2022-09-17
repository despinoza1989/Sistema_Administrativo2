<?php

require_once 'config/db.php';

class ClienteModel {

    function getById($id_solicitud_asesoria) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        sa.id_solicitud_asesoria, sa.detalle_asesoria, sa.id_solicitud_asesoria, sa.id_cliente_sa,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        ta.tipo_asesoria
        FROM solicitud_asesoria AS sa
        LEFT JOIN cliente AS c ON c.id_cliente = sa.id_cliente_sa
        LEFT JOIN tipo_asesoria AS ta ON ta.id_tipo_asesoria = sa.id_tipo_asesoria_sa WHERE id_tipo_asesoria  = '". $id_solicitud_asesoria ."'";
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
        sa.id_solicitud_asesoria, sa.detalle_asesoria, sa.id_solicitud_asesoria, sa.id_cliente_sa,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        ta.tipo_asesoria
        FROM solicitud_asesoria AS sa
        LEFT JOIN cliente AS c ON c.id_cliente = sa.id_cliente_sa
        LEFT JOIN tipo_asesoria AS ta ON ta.id_tipo_asesoria = sa.id_tipo_asesoria_sa";
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
        $queryInsert = "INSERT INTO solicitud_asesoria (detalle_asesoria, id_tipo_asesoria_sa, id_cliente_sa) VALUES ('". $data['detalle_asesoria']."', '". $data['id_tipo_asesoria_sa']."', '". $data['id_cliente_sa']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE solicitud_asesoria SET solicitud_asesoria = '".$data['solicitud_asesoria']."' WHERE id_solicitud_asesoria = '".$data['id_solicitud_asesoria']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_tipo_asesoria) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM solicitud_asesoria WHERE id_solicitud_asesoria ='".$id_solicitud_asesoria."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>