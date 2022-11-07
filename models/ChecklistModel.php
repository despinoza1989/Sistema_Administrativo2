<?php

require_once 'config/db.php';

class ChecklistModel {

    function getById($id_check_list) {
        
        $conexion= Database::connect();
        $query = "SELECT ck.id_check_list, ck.fecha_check_list, ck.obs_check_general, ck.obs_check_proteccion, ck.obs_check_herramientas, ck.obs_check_maquinaria, ck.id_personal_ckl, ck.id_cliente_ckl, ck.id_rubro_ckl,
        p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, 
        r.tipo_rubro
        FROM check_list AS ck
        LEFT JOIN personal AS p ON p.id_personal = ck.id_personal_ckl
        LEFT JOIN cliente AS c ON c.id_cliente = ck.id_cliente_ckl
        LEFT JOIN rubro AS r ON r.id_rubro = ck.id_rubro_ckl WHERE ck.id_check_list  = '". $id_check_list ."'"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT ck.id_check_list, ck.fecha_check_list, ck.obs_check_general, ck.obs_check_proteccion, ck.obs_check_herramientas, ck.obs_check_maquinaria, ck.id_personal_ckl, ck.id_cliente_ckl, ck.id_rubro_ckl,
        p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, 
        r.tipo_rubro
        FROM check_list AS ck
        LEFT JOIN personal AS p ON p.id_personal = ck.id_personal_ckl
        LEFT JOIN cliente AS c ON c.id_cliente = ck.id_cliente_ckl
        LEFT JOIN rubro AS r ON r.id_rubro = ck.id_rubro_ckl";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getByDetalleCheckList($id_check_list) {
        
        $conexion= Database::connect();
        $query = "SELECT ck.id_check_list, ck.fecha_check_list, ck.obs_check_general, ck.obs_check_proteccion, ck.obs_check_herramientas, ck.obs_check_maquinaria, ck.id_personal_ckl, ck.id_cliente_ckl, ck.id_rubro_ckl,
        p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        r.id_rubro, r.tipo_rubro
        FROM check_list AS ck
        LEFT JOIN personal AS p ON p.id_personal = ck.id_personal_ckl
        LEFT JOIN rubro AS r ON r.id_rubro = ck.id_rubro_ckl
        LEFT JOIN asignacion_profesional AS ap ON ap.id_personal_ap = ck.id_personal_ckl
        LEFT JOIN cliente AS c ON c.id_cliente = ap.id_cliente_ap
        WHERE id_check_list = '". $id_check_list ."'
        GROUP BY ck.id_check_list"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function create($data) {

        $conexion= Database::connect();
        $queryInsert = "INSERT INTO check_list (fecha_check_list, obs_check_general, obs_check_proteccion, obs_check_herramientas, obs_check_maquinaria, id_personal_ckl, id_cliente_ckl, id_rubro_ckl)
        VALUES ('". $data['fecha_check_list']."', '". $data['obs_check_general']."', '". $data['obs_check_proteccion']."', '". $data['obs_check_herramientas']."',
        '". $data['obs_check_maquinaria']."', '". $data['id_personal_ckl']."', '". $data['id_cliente_ckl']."', '". $data['id_rubro_ckl']."')";
        $result = $conexion->query($queryInsert);

        $query2 = "SELECT LAST_INSERT_ID() as id";
        $result2 = $conexion->query($query2);
        $response=array();
        while ($row = mysqli_fetch_assoc($result2)) { $response = $row; }
        $result2->close();

        $conexion->close();
        return array('resultado insert'=>$result,'id'=>$response['id']);
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE check_list SET fecha_check_list = '". $data['fecha_check_list']."', obs_check_general = '". $data['obs_check_general']."', obs_check_proteccion = '". $data['obs_check_proteccion']."', obs_check_herramientas = '". $data['obs_check_herramientas']."', obs_check_maquinaria = '". $data['obs_check_maquinaria']."' WHERE id_check_list = '".$data['id_check_list']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_check_list) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM check_list WHERE id_check_list ='".$id_check_list."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>