<?php

require_once 'config/db.php';

class ReporteAccidenteModel {

    function getById($id_reporte_accidente) {
        
        $conexion= Database::connect();
        $query = "SELECT
        ra.id_reporte_accidente, ra.detalle_accidente, ra.cantidad_personas, ra.fecha_accidente, ra.id_cliente_ra,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro,
        r.tipo_rubro
        FROM reporte_accidente AS ra
        LEFT JOIN cliente AS c ON c.id_cliente = ra.id_cliente_ra 
        LEFT JOIN rubro AS r ON c.id_rubro = r.id_rubro
        WHERE ra.id_cliente_ra  = '". $id_reporte_accidente ."'"; 
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
        ra.id_reporte_accidente, ra.detalle_accidente, ra.cantidad_personas, ra.fecha_accidente, ra.id_cliente_ra,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente, c.usuario_cliente, c.tipo_usuario_c, c.id_rubro
        FROM reporte_accidente AS ra
        LEFT JOIN cliente AS c ON c.id_cliente = ra.id_cliente_ra";
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
        $queryInsert = "INSERT INTO reporte_accidente (detalle_accidente, cantidad_personas, fecha_accidente, id_cliente_ra) VALUES ('". $data['detalle_accidente']."', '". $data['cantidad_personas']."', '". $data['fecha_accidente']."', '". $data['id_cliente_ra']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE reporte_accidente SET reporte_accidente = '". $data['reporte_accidente']."', detalle_accidente = '". $data['detalle_accidente']."', cantidad_personas = '". $data['cantidad_personas']."', fecha_accidente = '". $data['fecha_accidente']."', id_cliente_ra = '". $data['id_cliente_ra']."' WHERE id_reporte_accidente = '".$data['id_reporte_accidente']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_reporte_accidente) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM reporte_accidente WHERE id_reporte_accidente ='".$id_reporte_accidente."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>