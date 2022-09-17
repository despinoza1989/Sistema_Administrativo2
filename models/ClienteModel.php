<?php

require_once 'config/db.php';

class ClienteModel {

    function getById($id_cliente) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        c.id_cliente, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, 
        c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        r.tipo_rubro
        FROM cliente AS c
        LEFT JOIN rubro AS r ON r.id_rubro = c.id_rubro WHERE id_tipo_asesoria  = '". $id_cliente ."'";
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
        c.id_cliente, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, 
        c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        r.tipo_rubro
        FROM cliente AS c
        LEFT JOIN rubro AS r ON r.id_rubro = c.id_rubro";
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
        $queryInsert = "INSERT INTO cliente (rol_cliente, razon_social_cliente, telefono_cliente, email_cliente, direccion_cliente, estado_usuario_cliente,  usuario_cliente, password_cliente, tipo_usuario_c, id_rubro) VALUES ('". $data['rol_cliente']."', '". $data['razon_social_cliente']."', '". $data['telefono_cliente']."', '". $data['email_cliente']."', '". $data['direccion_cliente']."', '". $data['estado_usuario_cliente']."', '". $data['usuario_cliente']."', '". $data['password_cliente']."', '". $data['tipo_usuario_c']."', '". $data['id_rubro']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE cliente SET rol_cliente = '". $data['rol_cliente']."', razon_social_cliente = '". $data['razon_social_cliente']."', telefono_cliente = '". $data['telefono_cliente']."', email_cliente = '". $data['email_cliente']."', direccion_cliente = '". $data['direccion_cliente']."', estado_usuario_cliente = '". $data['estado_usuario_cliente']."', usuario_cliente = '". $data['usuario_cliente']."', password_cliente = '". $data['password_cliente']."', tipo_usuario_c = '". $data['tipo_usuario_c']."', id_rubro = '". $data['id_rubro']."' WHERE id_cliente = '".$data['id_cliente']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_tipo_asesoria) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM cliente WHERE id_cliente ='".$id_cliente."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>