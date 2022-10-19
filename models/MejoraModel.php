<?php

require_once 'config/db.php';

class MejoraModel {

    function getById($id_mejoras) {
        
        $conexion= Database::connect();
        $query = "SELECT m.id_mejoras, m.obs_check_general, m.doc_check_general, m.img_check_general, m.obs_check_proteccion, m.doc_check_proteccion,
        m.img_check_proteccion, m.obs_check_herramientas, m.doc_check_herramientas, m.img_check_herramientas, m.obs_check_maquinaria,
        m.doc_check_maquinaria, m.img_check_maquinaria, 
        ck.fecha_check_list, ck.obs_check_general, ck.obs_check_proteccion, ck.obs_check_herramientas, ck.obs_check_maquinaria,
        c.id_cliente, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente,
        c.usuario_cliente, c.password_cliente, c.tipo_usuario_c, c.id_rubro
        FROM mejoras AS m
        LEFT JOIN check_list AS ck ON m.id_check_list_m = ck.id_check_list
        LEFT JOIN cliente AS c ON m.id_cliente_m = c.id_cliente WHERE m.id_mejoras  = '". $id_mejoras ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT m.id_mejoras, m.obs_check_general, m.doc_check_general, m.img_check_general, m.obs_check_proteccion, m.doc_check_proteccion,
        m.img_check_proteccion, m.obs_check_herramientas, m.doc_check_herramientas, m.img_check_herramientas, m.obs_check_maquinaria,
        m.doc_check_maquinaria, m.img_check_maquinaria, 
        ck.fecha_check_list, ck.obs_check_general, ck.obs_check_proteccion, ck.obs_check_herramientas, ck.obs_check_maquinaria,
        c.id_cliente, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente,
        c.usuario_cliente, c.password_cliente, c.tipo_usuario_c, c.id_rubro
        FROM mejoras AS m
        LEFT JOIN check_list AS ck ON m.id_check_list_m = ck.id_check_list
        LEFT JOIN cliente AS c ON m.id_cliente_m = c.id_cliente";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getByListado() {

        $conexion= Database::connect();
        $query = "SELECT 	m.id_mejoras, m.obs_check_general, ck.fecha_check_list, c.rol_cliente, c.razon_social_cliente
        FROM mejoras AS m
        LEFT JOIN check_list AS ck ON m.id_check_list_m = ck.id_check_list
        LEFT JOIN cliente AS c ON m.id_cliente_m = c.id_cliente";
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
        $queryInsert = "INSERT INTO mejoras (obs_check_general, doc_check_general, img_check_general, obs_check_proteccion, doc_check_proteccion, img_check_proteccion, obs_check_herramientas, doc_check_herramientas, img_check_herramientas, obs_check_maquinaria, doc_check_maquinaria, img_check_maquinaria, id_check_list_m, id_cliente_m) VALUES ('". $data['obs_check_general']."', '". $data['doc_check_general']."', '". $data['img_check_general']."', '". $data['obs_check_proteccion']."', '". $data['doc_check_proteccion']."', '". $data['img_check_proteccion']."', '". $data['obs_check_herramientas']."', '". $data['doc_check_herramientas']."', '". $data['img_check_herramientas']."', '". $data['obs_check_maquinaria']."', '". $data['doc_check_maquinaria']."', '". $data['img_check_maquinaria']."', '". $data['id_check_list_m']."', '". $data['id_cliente_m']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE mejoras SET obs_check_general = '".$data['obs_check_general']."', doc_check_general = '".$data['doc_check_general']."',img_check_general = '".$data['img_check_general']."',obs_check_proteccion = '".$data['obs_check_proteccion']."',doc_check_proteccion = '".$data['doc_check_proteccion']."',img_check_proteccion = '".$data['img_check_proteccion']."',obs_check_herramientas = '".$data['obs_check_herramientas']."',doc_check_herramientas = '".$data['doc_check_herramientas']."',img_check_herramientas = '".$data['img_check_herramientas']."',obs_check_maquinaria = '".$data['obs_check_general']."',doc_check_maquinaria = '".$data['doc_check_maquinaria']."',img_check_maquinaria = '".$data['img_check_maquinaria']."', WHERE id_mejoras = '".$data['id_mejoras']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_mejoras) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM mejoras WHERE id_mejoras ='".$id_mejoras."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>