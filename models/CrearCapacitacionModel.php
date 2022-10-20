<?php

require_once 'config/db.php';

class CrearCapacitacionModel {

    function getById($id_crear_capacitacion) {
        
        $conexion= Database::connect();
        $query = "SELECT cc.id_crear_capacitacion, cc.nombre_capacitacion, cc.fecha_capacitacion, cc.link_capacitacion, cc.id_personal_cc, 
        cc.id_tipo_personal_capacitacion_cc, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal,
        p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.password_personal, p.estado_usuario_personal, p.id_tipo_usuario_p,
        p.id_estado_civil, p.id_genero, tpc.tipo_personal_capacitacion
        FROM crear_capacitacion AS cc
        LEFT JOIN personal AS p ON p.id_personal = cc.id_personal_cc
        LEFT JOIN tipo_personal_capacitacion AS tpc ON tpc.id_tipo_personal_capacitacion = cc.id_tipo_personal_capacitacion_cc WHERE id_crear_capacitacion  = '". $id_crear_capacitacion ."'"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "
        SELECT cc.id_crear_capacitacion, cc.nombre_capacitacion, cc.fecha_capacitacion, cc.link_capacitacion, cc.id_personal_cc, 
        cc.id_tipo_personal_capacitacion_cc, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal,
        p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.password_personal, p.estado_usuario_personal, p.id_tipo_usuario_p,
        p.id_estado_civil, p.id_genero, tpc.tipo_personal_capacitacion
        FROM crear_capacitacion AS cc
        LEFT JOIN personal AS p ON p.id_personal = cc.id_personal_cc
        LEFT JOIN tipo_personal_capacitacion AS tpc ON tpc.id_tipo_personal_capacitacion = cc.id_tipo_personal_capacitacion_cc";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAllByCapacitacion($id_personal) {

        $conexion= Database::connect();
        $query = "SELECT cc.id_crear_capacitacion, cc.nombre_capacitacion, cc.fecha_capacitacion, cc.link_capacitacion, cc.id_personal_cc, 
        cc.id_tipo_personal_capacitacion_cc, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal,
        p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p,
        p.id_estado_civil, p.id_genero, tpc.tipo_personal_capacitacion
        FROM crear_capacitacion AS cc
        LEFT JOIN personal AS p ON p.id_personal = cc.id_personal_cc
        LEFT JOIN tipo_personal_capacitacion AS tpc ON tpc.id_tipo_personal_capacitacion = cc.id_tipo_personal_capacitacion_cc WHERE cc.id_personal_cc = '". $id_personal ."'";
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
        $queryInsert = "INSERT INTO crear_capacitacion (nombre_capacitacion, fecha_capacitacion, link_capacitacion, id_personal_cc, id_tipo_personal_capacitacion_cc, ) VALUES ('". $data['nombre_capacitacion']."', '". $data['fecha_capacitacion']."','". $data['link_capacitacion']."', '". $data['id_personal_cc']."', '". $data['id_tipo_personal_capacitacion_cc']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE crear_capacitacion SET nombre_capacitacion = '". $data['nombre_capacitacion']."', fecha_capacitacion = '". $data['fecha_capacitacion']."', link_capacitacion = '". $data['link_capacitacion']."', id_personal_cc = '". $data['id_personal_cc']."', id_tipo_personal_capacitacion_cc = '". $data['id_tipo_personal_capacitacion_cc']."', WHERE id_crear_capacitacion = '".$data['id_crear_capacitacion']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_crear_capacitacion) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM crea_capacitacion WHERE id_crear_capacitacion ='".$id_crear_capacitacion."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>