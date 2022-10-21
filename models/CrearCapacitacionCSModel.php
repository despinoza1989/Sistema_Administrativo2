<?php

require_once 'config/db.php';

class CrearCapacitacionCSModel {

    function getById($id_crear_capacitacioncs) {
        
        $conexion= Database::connect();
        $query = "SELECT cs.id_crear_capacitacioncs, cs.link_capacitacioncs, cs.id_solicitudcs, cs.id_clientecs, sc.nombre_solicitud_capacitacion, sc.fecha_solicitud_capacitacion,
            c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro
            FROM crear_capacitacioncs AS cs
            LEFT JOIN solicitud_capacitacion AS sc ON sc.id_solicitud_capacitacion = cs.id_solicitudcs
            LEFT JOIN cliente AS c ON cs.id_clientecs = c.id_cliente WHERE id_crear_capacitacioncs  = '". $id_crear_capacitacioncs ."'"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT cs.id_crear_capacitacioncs, cs.link_capacitacioncs, cs.id_solicitudcs, cs.id_clientecs, sc.nombre_solicitud_capacitacion, sc.fecha_solicitud_capacitacion,
            c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro
            FROM crear_capacitacioncs AS cs
            LEFT JOIN solicitud_capacitacion AS sc ON sc.id_solicitud_capacitacion = cs.id_solicitudcs
            LEFT JOIN cliente AS c ON cs.id_clientecs = c.id_cliente";
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
        $queryInsert = "INSERT INTO crear_capacitacioncs (link_capacitacioncs,id_solicitudcs, id_clientecs) VALUES ('". $data['link_capacitacioncs']."','". $data['id_solicitudcs']."','". $data['id_clientecs']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE crear_capacitacioncs SET  link_capacitacioncs = '". $data['link_capacitacioncs']."',";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_crear_capacitacion) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM crea_capacitacioncs WHERE id_crea_capacitacioncs ='".$id_crea_capacitacioncs."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>