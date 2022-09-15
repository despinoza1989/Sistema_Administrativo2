<?php

require_once 'config/db.php';

class ClienteModel {

    function getById($id) {

        $conexion= Database::connect();
        $query = "SELECT b.bitacora_id, b.comentario, b.fecha_creacion, b.operacion, b.tipo_bitacora_id, t.nombre_tipo_bitacora, u.username FROM bitacora as b left join tipo_bitacora t on t.tipo_bitacora_id = b.tipo_bitacora_id left join usuario u on u.id = b.usuario_id  WHERE b.bitacora_id  = '". $id ."' limit 1";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $link = getConnect();
        $query = "SELECT b.bitacora_id, b.comentario, b.fecha_creacion, b.operacion, b.tipo_bitacora_id, t.nombre_tipo_bitacora, u.username FROM bitacora as b left join tipo_bitacora t on t.tipo_bitacora_id = b.tipo_bitacora_id left join usuario u on u.id = b.usuario_id";
        $result = $link->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $link->close();
        return $response;
    }

    function create($data) {

        $link = getConnect();
        $queryInsert = "INSERT INTO bitacora (operacion, comentario, fecha_creacion, tipo_bitacora_id, usuario_id) VALUES ('". $data['operacion']."', '". $data['comentario']."', now(), '". $data['tipo_bitacora_id']."', '". $data['usuario_id']."')";
        $result = $link->query($queryInsert);
        $link->close();
        return $result;
    }

    function update($data) {

        $link = getConnect();
        $queryUpdate = "UPDATE bitacora SET comentario = '".$data['comentario']."'   WHERE bitacora_id = '".$data['bitacora_id']."'";
        $result = $link->query($queryUpdate);
        $link->close();
        return $result;
    }

    function delete($id) {

        $link = getConnect();
        $queryDelete = "DELETE FROM bitacora WHERE bitacora_id ='".$id."'";
        $result = $link->query($queryDelete);
        $link->close();
        return $result;
    }
}
?>