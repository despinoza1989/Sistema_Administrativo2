<?php

require_once 'config/db.php';

class VisitaTerrenoModel {

    function getById($id_visita_terreno) {
        
        $conexion= Database::connect();
        $query = "SELECT
        v.id_visita_terreno, v.fecha_visita, v.motivo_visita,
        v.id_personal_vt, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal,
        p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.password_personal, p.estado_usuario_personal,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, 
        c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.password_cliente, c.tipo_usuario_c
        FROM visita_terreno AS v 
        LEFT JOIN personal AS p ON v.id_visita_terreno = p.id_personal
        LEFT JOIN cliente AS c ON c.id_cliente = v.id_visita_terreno WHERE id_visita_terreno  = '". $id_visita_terreno ."'";
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
        v.id_visita_terreno, v.fecha_visita, v.motivo_visita,
        v.id_personal_vt, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal,
        p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.password_personal, p.estado_usuario_personal,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, 
        c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.password_cliente, c.tipo_usuario_c
        FROM visita_terreno AS v 
        LEFT JOIN personal AS p ON p.id_personal = v.id_personal_vt
        LEFT JOIN cliente AS c ON c.id_cliente = v.id_cliente_vt";
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
        $queryInsert = "INSERT INTO visita_terreno (fecha_visita, motivo_visita, id_personal_vt, id_cliente_vt) VALUES ('". $data['fecha_visita']."', '". $data['motivo_visita']."', '". $data['id_personal_vt']."', '". $data['id_cliente_vt']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE visita_terreno SET fecha_visita = '".$data['fecha_visita']."', motivo_visita = '".$data['motivo_visita']."', id_personal_vt = '".$data['id_personal_vt']."', id_cliente_vt = '".$data['id_cliente_vt']."' WHERE id_visita_terreno = '".$data['id_visita_terreno']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_visita_terreno) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM visita_terreno WHERE id_visita_terreno ='".$id_visita_terreno."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>