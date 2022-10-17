<?php

require_once 'config/db.php';

class DetalleChecklistModel {

    function getById($id_detalle_check_list) {
        
        $conexion= Database::connect();
        $query = "SELECT d.id_detalle_check_list, d.nombre_item, d.valor_item, d.id_check_list_dcl,
        ck.fecha_check_list, ck.obs_check_general, ck.obs_check_proteccion, ck.obs_check_herramientas, ck.obs_check_maquinaria,
        ck.id_personal_ckl, ck.id_cliente_ckl, ck.id_rubro_ckl
        FROM detalle_check_list AS d 
        LEFT JOIN check_list AS ck ON ck.id_check_list = d.id_check_list_dcl WHERE d.id_detalle_check_list  = '". $id_detalle_check_list ."'"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT d.id_detalle_check_list, d.nombre_item, d.valor_item, d.id_check_list_dcl,
        ck.fecha_check_list, ck.obs_check_general, ck.obs_check_proteccion, ck.obs_check_herramientas, ck.obs_check_maquinaria,
        ck.id_personal_ckl, ck.id_cliente_ckl, ck.id_rubro_ckl
        FROM detalle_check_list AS d 
        LEFT JOIN check_list AS ck ON ck.id_check_list = d.id_check_list_dcl";
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
        $queryInsert = "INSERT INTO detalle_check_list (nombre_item, valor_item, id_check_list_dcl)
        VALUES ('". $data['nombre_item']."', '". $data['valor_item']."', '". $data['id_check_list_dcl']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE detalle_check_list SET nombre_item = '". $data['nombre_item']."', valor_item = '". $data['valor_item']."' WHERE id_detalle_check_list = '".$data['id_detalle_check_list']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_detalle_check_list) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM detalle_check_list WHERE id_detalle_check_list ='".$id_detalle_check_list."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>