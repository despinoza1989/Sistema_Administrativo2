<?php

require_once 'config/db.php';

class RegistroContrato {

    function getById($id_registro_contrato) {
        
        $conexion= Database::connect();
        $query = "SELECT id_registro_contrato, id_cliente_rc, id_plan_servicio_rc, id_pago_servicio_rc,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente,
        c.usuario_cliente, c.tipo_usuario_c, c.id_rubro, ps.visita_mensual, ps.asesorias, ps.capacitaciones,
        pss.estado_pago, pss.fecha_pago, pss.monto_pago, pss.id_cliente_ps,pss.id_plan_servicio_ps, pss.id_tipo_documento_ps,
        pss.id_tipo_pago_ps
        FROM registro_contrato AS rc
        LEFT JOIN cliente AS c ON c.id_cliente = rc.id_cliente_rc
        LEFT JOIN plan_servicio AS ps ON ps.id_plan_servicio = rc.id_plan_servicio_rc
        LEFT JOIN pago_servicio AS pss ON pss.id_plan_servicio_ps = rc.id_pago_servicio_rc WHERE id_registro_contrato  = '". $id_registro_contrato ."'"; 
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
        SELECT id_registro_contrato, id_cliente_rc, id_plan_servicio_rc, id_pago_servicio_rc,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente,
        c.usuario_cliente, c.tipo_usuario_c, c.id_rubro, ps.visita_mensual, ps.asesorias, ps.capacitaciones,
        pss.estado_pago, pss.fecha_pago, pss.monto_pago, pss.id_cliente_ps,pss.id_plan_servicio_ps, pss.id_tipo_documento_ps,
        pss.id_tipo_pago_ps
        FROM registro_contrato AS rc
        LEFT JOIN cliente AS c ON c.id_cliente = rc.id_cliente_rc
        LEFT JOIN plan_servicio AS ps ON ps.id_plan_servicio = rc.id_plan_servicio_rc
        LEFT JOIN pago_servicio AS pss ON pss.id_plan_servicio_ps = rc.id_pago_servicio_rc";
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
        $queryInsert = "INSERT INTO registro_contrato (id_cliente_rc, id_plan_servicio_rc, id_pago_servicio_rc, ) VALUES ('". $data['id_registro_contrato']."', '". $data['id_cliente_rc ']."', '". $data['id_plan_servicio_rc ']."', '". $data['id_pago_servicio_rc ']."',)";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE registro_contrato SET id_cliente_rc = '". $data['id_cliente_rc']."', id_plan_servicio_rc = '". $data['id_plan_servicio_rc']."', id_pago_servicio_rc = '". $data['id_pago_servicio_rc']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_registro_contrato) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM registro_contrato WHERE id_registro_contrato ='".$id_registro_contrato."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>