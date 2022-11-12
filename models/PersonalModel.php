<?php

require_once 'config/db.php';

class PersonalModel {

    function getById($id_personal) {
        
        $conexion= Database::connect();
        $query = "SELECT p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal,
        p.fecha_nacimiento_p, p.usuario_personal, p.password_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero, tp.tipo_usuario, ec.tipo_estado_civil,
        g.tipo_genero
        FROM personal AS p         
        LEFT JOIN tipo_usuario AS tp ON tp.id_tipo_usuario = p.id_tipo_usuario_p
        LEFT JOIN estado_civil AS ec ON ec.id_estado_civil = p.id_estado_civil
        LEFT JOIN genero AS g ON g.id_genero = p.id_genero WHERE p.id_personal  = '". $id_personal ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal,
        p.fecha_nacimiento_p, p.usuario_personal, p.password_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero, tp.tipo_usuario, ec.tipo_estado_civil,
        g.tipo_genero
        FROM personal AS p         
        LEFT JOIN tipo_usuario AS tp ON tp.id_tipo_usuario = p.id_tipo_usuario_p
        LEFT JOIN estado_civil AS ec ON ec.id_estado_civil = p.id_estado_civil
        LEFT JOIN genero AS g ON g.id_genero = p.id_genero";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAllByEstado($estado) {
        
        $conexion= Database::connect();
        $query = "SELECT p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal,
        p.fecha_nacimiento_p, p.usuario_personal, p.password_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero, tp.tipo_usuario, ec.tipo_estado_civil,
        g.tipo_genero
        FROM personal AS p         
        LEFT JOIN tipo_usuario AS tp ON tp.id_tipo_usuario = p.id_tipo_usuario_p
        LEFT JOIN estado_civil AS ec ON ec.id_estado_civil = p.id_estado_civil
        LEFT JOIN genero AS g ON g.id_genero = p.id_genero WHERE p.estado_usuario_personal  = '". $estado ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { 
            
            $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getProfesionalAll($id_tipo_usuario_p) {

        $conexion= Database::connect();
        $query = "SELECT p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal,
        p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero, tp.tipo_usuario, ec.tipo_estado_civil,
        g.tipo_genero
        FROM personal AS p         
        LEFT JOIN tipo_usuario AS tp ON tp.id_tipo_usuario = p.id_tipo_usuario_p
        LEFT JOIN estado_civil AS ec ON ec.id_estado_civil = p.id_estado_civil
        LEFT JOIN genero AS g ON g.id_genero = p.id_genero WHERE p.id_tipo_usuario_p= '". $id_tipo_usuario_p ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAdministrativoAll() {

        $conexion= Database::connect();
        $query = "SELECT p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal,
        p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero, tp.tipo_usuario, ec.tipo_estado_civil,
        g.tipo_genero
        FROM personal AS p         
        LEFT JOIN tipo_usuario AS tp ON tp.id_tipo_usuario = p.id_tipo_usuario_p
        LEFT JOIN estado_civil AS ec ON ec.id_estado_civil = p.id_estado_civil
        LEFT JOIN genero AS g ON g.id_genero = p.id_genero WHERE p.id_tipo_usuario_p= '2'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAllByRut($rut_personal) {
        
        $conexion= Database::connect();
        $query = "SELECT p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal,
        p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero, tp.tipo_usuario, ec.tipo_estado_civil,
        g.tipo_genero
        FROM personal AS p         
        LEFT JOIN tipo_usuario AS tp ON tp.id_tipo_usuario = p.id_tipo_usuario_p
        LEFT JOIN estado_civil AS ec ON ec.id_estado_civil = p.id_estado_civil
        LEFT JOIN genero AS g ON g.id_genero = p.id_genero WHERE p.rut_personal  = '". $rut_personal ."'";
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
        $queryInsert = "INSERT INTO personal (rut_personal, telefono_personal, nombre_personal, apellidos_personal, email_personal, direccion_personal, fecha_nacimiento_p, usuario_personal, password_personal, estado_usuario_personal, id_tipo_usuario_p, id_estado_civil, id_genero) 
        VALUES ('". $data['rut_personal']."','". $data['telefono_personal']."','". $data['nombre_personal']."','". $data['apellidos_personal']."','". $data['email_personal']."','". $data['direccion_personal']."','". $data['fecha_nacimiento_p']."','". $data['usuario_personal']."','". $data['password_personal']."','". $data['estado_usuario_personal']."','". $data['id_tipo_usuario_p']."','". $data['id_estado_civil']."','". $data['id_genero']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE personal SET rut_personal = '".$data['rut_personal']."', telefono_personal = '".$data['telefono_personal']."',
        nombre_personal = '".$data['nombre_personal']."',apellidos_personal = '".$data['apellidos_personal']."',email_personal = '".$data['email_personal']."',
        direccion_personal = '".$data['direccion_personal']."',fecha_nacimiento_p = '".$data['fecha_nacimiento_p']."',usuario_personal = '".$data['usuario_personal']."',
        password_personal = '".$data['password_personal']."',estado_usuario_personal = '".$data['estado_usuario_personal']."',
        id_tipo_usuario_p = '".$data['id_tipo_usuario_p']."',id_estado_civil = '".$data['id_estado_civil']."',id_genero = '".$data['id_genero']."' 
        WHERE id_personal = '".$data['id_personal']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function updateEstado($id, $estado) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE personal SET estado_usuario_personal = '". $estado ."' WHERE id_personal = '". $id ."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }


    function delete($id_personal) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM personal WHERE id_personal ='".$id_personal."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>