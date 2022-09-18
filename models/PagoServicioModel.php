<?php

require_once 'config/db.php';

class PagoServicioModel {

    function getById($id_pago_servicio) {
        
        $conexion= Database::connect();
        $query = "SELECT ps.id_pago_servicio, ps.estado_pago, ps.fecha_pago, ps.monto_pago, ps.id_cliente_ps, ps.id_plan_servicio_ps, ps.id_tipo_documento_ps, ps.id_tipo_pago_ps,
        tp.tipo_pago, td.tipo_documento, pss.visita_mensual, pss.asesorias, pss.capacitaciones, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente,
        c.usuario_cliente, c.tipo_usuario_c, c.id_rubro
        FROM pago_servicio AS ps
        LEFT JOIN tipo_pago AS tp ON tp.id_tipo_pago = ps.id_tipo_pago_ps
        LEFT JOIN tipo_documento AS td ON td.id_tipo_documento = ps.id_tipo_documento_ps
        LEFT JOIN plan_servicio AS pss ON pss.id_plan_servicio = ps.id_plan_servicio_ps
        LEFT JOIN cliente AS c ON c.id_cliente = ps.id_cliente_ps WHERE id_pago_servicio  = '". $id_pago_servicio ."'"; 
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
        SELECT ps.id_pago_servicio, ps.estado_pago, ps.fecha_pago, ps.monto_pago, ps.id_cliente_ps, ps.id_plan_servicio_ps, ps.id_tipo_documento_ps, ps.id_tipo_pago_ps,
        tp.tipo_pago, td.tipo_documento, pss.visita_mensual, pss.asesorias, pss.capacitaciones, c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente,
        c.usuario_cliente, c.tipo_usuario_c, c.id_rubro
        FROM pago_servicio AS ps
        LEFT JOIN tipo_pago AS tp ON tp.id_tipo_pago = ps.id_tipo_pago_ps
        LEFT JOIN tipo_documento AS td ON td.id_tipo_documento = ps.id_tipo_documento_ps
        LEFT JOIN plan_servicio AS pss ON pss.id_plan_servicio = ps.id_plan_servicio_ps
        LEFT JOIN cliente AS c ON c.id_cliente = ps.id_cliente_ps";
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
        $queryInsert = "INSERT INTO pago_servicio (estado_pago, fecha_pago, monto_pago, id_cliente_ps, id_plan_servicio_ps, id_tipo_documento_ps, id_tipo_pago_ps, ) VALUES ('". $data['estado_pago']."', '". $data['fecha_pago']."', '". $data['monto_pago']."', '". $data['id_cliente_ps']."', '". $data['id_plan_servicio_ps']."', '". $data['id_tipo_documento_ps']."', '". $data['id_tipo_pago_ps']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE pago_servicio SET estado_pago = '". $data['estado_pago']."', fecha_pago = '". $data['fecha_pago']."', monto_pago = '". $data['monto_pago']."', id_cliente_ps = '". $data['id_cliente_ps']."', id_plan_servicio_ps = '". $data['id_plan_servicio_ps']."', id_tipo_documento_ps = '". $data['id_tipo_documento_ps']."', id_tipo_pago_ps = '". $data['id_tipo_pago_ps']."', WHERE id_pago_servicio = '".$data['id_pago_servicio']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_pago_servicio) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM pago_servicio WHERE id_pago_servicio ='".$id_pago_servicio."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>