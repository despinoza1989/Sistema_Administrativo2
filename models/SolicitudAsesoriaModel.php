<?php

require_once 'config/db.php';

class SolicitudAsesoriaModel {

    function getById($id_solicitud_asesoria) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        sa.id_solicitud_asesoria, sa.detalle_asesoria, sa.id_tipo_asesoria_sa, sa.id_cliente_sa,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        ta.tipo_asesoria,
        r.respuesta_asesoria,
        p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal
        FROM solicitud_asesoria AS sa
        LEFT JOIN cliente AS c ON c.id_cliente = sa.id_cliente_sa
        LEFT JOIN tipo_asesoria AS ta ON ta.id_tipo_asesoria = sa.id_tipo_asesoria_sa 
        LEFT JOIN respuesta_asesoria AS r ON r.id_solicitud_asesoria_ra = sa.id_solicitud_asesoria
        LEFT JOIN personal AS p ON p.id_personal = r.id_personal_sa
        WHERE sa.id_solicitud_asesoria  = '". $id_solicitud_asesoria ."'";
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
        sa.id_solicitud_asesoria, sa.detalle_asesoria, sa.id_tipo_asesoria_sa, sa.id_cliente_sa,
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


    function getByIdCliente($id_personal_ap) {
        $conexion= Database::connect();
        $query = "SELECT 
        sa.id_solicitud_asesoria, sa.detalle_asesoria, sa.id_tipo_asesoria_sa, sa.id_cliente_sa,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        ta.tipo_asesoria
        FROM solicitud_asesoria AS sa
        LEFT JOIN cliente AS c ON c.id_cliente = sa.id_cliente_sa
        LEFT JOIN tipo_asesoria AS ta ON ta.id_tipo_asesoria = sa.id_tipo_asesoria_sa
        LEFT JOIN asignacion_profesional AS ap ON ap.id_cliente_ap = sa.id_cliente_sa
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

    function getByListadoAdmin() {
        $conexion= Database::connect();
        $query = "SELECT 
        sa.id_solicitud_asesoria, c.razon_social_cliente, C.rol_cliente, c.direccion_cliente, c.email_cliente, c.telefono_cliente, 
        sa.detalle_asesoria,
        p.nombre_personal, p.apellidos_personal,
        ra.respuesta_asesoria
        FROM solicitud_asesoria AS sa
        LEFT JOIN cliente AS c ON c.id_cliente = sa.id_cliente_sa
        LEFT JOIN asignacion_profesional AS ap ON c.id_cliente = ap.id_cliente_ap
        LEFT JOIN personal AS p ON p.id_personal = ap.id_personal_ap
        LEFT JOIN tipo_asesoria AS ta ON ta.id_tipo_asesoria = sa.id_tipo_asesoria_sa
        LEFT JOIN respuesta_asesoria AS ra ON id_personal_sa = p.id_personal";
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

    function delete($id_solicitud_asesoria) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM solicitud_asesoria WHERE id_solicitud_asesoria ='".$id_solicitud_asesoria."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>