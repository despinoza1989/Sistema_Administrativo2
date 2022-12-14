<?php

require_once 'config/db.php';

class RespuestaAsesoriaModel {

    function getById($id_respuesta_asesoria) {
        
        $conexion= Database::connect();
        $query = "SELECT ra.id_respuesta_asesoria, ra.respuesta_asesoria, ra.id_solicitud_asesoria_ra, ra.id_personal_sa,
        sa.detalle_asesoria, sa.id_tipo_asesoria_sa, sa.id_cliente_sa, p.rut_personal, p.telefono_personal, p.nombre_personal, 
        p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal,
        p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        c.razon_social_cliente, c.rol_cliente, c.direccion_cliente, c.email_cliente, c.telefono_cliente,
        ta.tipo_asesoria
        FROM respuesta_asesoria AS ra
        LEFT JOIN solicitud_asesoria AS sa ON sa.id_solicitud_asesoria = ra.id_solicitud_asesoria_ra
        LEFT JOIN tipo_asesoria AS ta ON ta.id_tipo_asesoria = sa.id_tipo_asesoria_sa
        LEFT JOIN personal AS p ON p.id_personal = ra.id_personal_sa 
        LEFT JOIN cliente AS c ON c.id_cliente = sa.id_cliente_sa
        WHERE ra.id_respuesta_asesoria  = '". $id_respuesta_asesoria ."'"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT ra.id_respuesta_asesoria, ra.respuesta_asesoria, ra.id_solicitud_asesoria_ra, ra.id_personal_sa,
        sa.detalle_asesoria, sa.id_tipo_asesoria_sa, sa.id_cliente_sa, p.rut_personal, p.telefono_personal, p.nombre_personal, 
        p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal,
        p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        c.razon_social_cliente, c.rol_cliente, c.direccion_cliente, c.email_cliente, c.telefono_cliente
        FROM respuesta_asesoria AS ra
        LEFT JOIN solicitud_asesoria AS sa ON sa.id_solicitud_asesoria = ra.id_solicitud_asesoria_ra
        LEFT JOIN personal AS p ON p.id_personal = ra.id_personal_sa
        LEFT JOIN cliente AS c ON c.id_cliente = sa.id_cliente_sa";
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
        $queryInsert = "INSERT INTO respuesta_asesoria (respuesta_asesoria, id_solicitud_asesoria_ra, id_personal_sa) VALUES ('". $data['respuesta_asesoria']."', '". $data['id_solicitud_asesoria_ra']."', '". $data['id_personal_sa']."')";
        $result = $conexion->query($queryInsert);
        $query2 = "SELECT LAST_INSERT_ID() as id";
        $result2 = $conexion->query($query2);
        $response=array(); 
        while ($row = mysqli_fetch_assoc($result2)) { $response = $row; }
        $result2->close();

        $conexion->close();
        return array('resultado insert'=>$result,'id'=>$response['id']);
    }


    /*function create($data) {

        $conexion= Database::connect();
        $queryInsert = "INSERT INTO respuesta_asesoria (respuesta_asesoria, id_solicitud_asesoria_ra, id_personal_sa) VALUES ('". $data['respuesta_asesoria']."', '". $data['id_solicitud_asesoria_ra']."', '". $data['id_personal_sa']."')";
        $result = $conexion->query($queryInsert);

        $query2 = "SELECT LAST_INSERT_ID() as id";
        $result2 = $conexion->query($query2);
        $response=array();
        while ($row = mysqli_fetch_assoc($result2)) { $response = $row; }
        $result2->close();

        $conexion->close();
        return array('resultado_insert'=>$result,'id'=>$response['id']);
    }*/

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE respuesta_asesoria SET respuesta_asesoria = '". $data['respuesta_asesoria']."', id_solicitud_asesoria_ra = '". $data['id_solicitud_asesoria_ra']."', id_personal_sa = '". $data['id_personal_sa']."' WHERE id_respuesta_asesoria = '".$data['id_respuesta_asesoria']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_respuesta_asesoria) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM respuesta_asesoria WHERE id_respuesta_asesoria ='".$id_respuesta_asesoria."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>