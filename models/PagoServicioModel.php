<?php

require_once 'config/db.php';

class PagoServicioModel {

    function getById($id_pago_servicio) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        ps.id_pago_servicio, ps.estado_pago, ps.fecha_pago, ps.monto_pago, ps.fecha_vencimiento, ps.id_contrato_ps,
        co.id_contrato, co.fecha_inicio_c, co.fecha_fin_c, co.dia_pago, co.finalizado, co.id_cliente_c, co.id_plan_servicio_c, co.id_tipo_documento_c,
        pls.nombre_plan, pls.descripcion_plan, pls.monto_plan,
        td.tipo_documento,
        cl.rol_cliente, cl.razon_social_cliente, cl.telefono_cliente, cl.email_cliente, cl.direccion_cliente
        FROM pago_servicio AS ps
        LEFT JOIN contrato AS co ON co.id_contrato = ps.id_contrato_ps
        LEFT JOIN plan_servicio AS pls ON pls.id_plan_servicio = co.id_plan_servicio_c
        LEFT JOIN tipo_documento AS td ON td.id_tipo_documento = id_tipo_documento_c
        LEFT JOIN cliente AS cl ON cl.id_cliente = co.id_cliente_c WHERE ps.id_pago_servicio = '". $id_pago_servicio ."'"; 
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
        ps.id_pago_servicio, ps.estado_pago, ps.fecha_pago, ps.monto_pago, ps.fecha_vencimiento, ps.id_contrato_ps,
        co.id_contrato, co.fecha_inicio_c, co.fecha_fin_c, co.dia_pago, co.finalizado, co.id_cliente_c, co.id_plan_servicio_c, co.id_tipo_documento_c,
        pls.nombre_plan, pls.descripcion_plan, pls.monto_plan,
        td.tipo_documento,
        cl.rol_cliente, cl.razon_social_cliente, cl.telefono_cliente, cl.email_cliente, cl.direccion_cliente
        FROM pago_servicio AS ps
        LEFT JOIN contrato AS co ON co.id_contrato = ps.id_contrato_ps
        LEFT JOIN plan_servicio AS pls ON pls.id_plan_servicio = co.id_plan_servicio_c
        LEFT JOIN tipo_documento AS td ON td.id_tipo_documento = id_tipo_documento_c
        LEFT JOIN cliente AS cl ON cl.id_cliente = co.id_cliente_c";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }


    function getByIdCliente($id_cliente_c) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        ps.id_pago_servicio, ps.estado_pago, ps.fecha_pago, ps.monto_pago, ps.fecha_vencimiento, ps.id_contrato_ps,
        co.id_contrato, co.fecha_inicio_c, co.fecha_fin_c, co.dia_pago, co.finalizado, co.id_cliente_c, co.id_plan_servicio_c, co.id_tipo_documento_c,
        pls.nombre_plan, pls.descripcion_plan, pls.monto_plan,
        td.tipo_documento,
        cl.rol_cliente, cl.razon_social_cliente, cl.telefono_cliente, cl.email_cliente, cl.direccion_cliente
        FROM pago_servicio AS ps
        LEFT JOIN contrato AS co ON co.id_contrato = ps.id_contrato_ps
        LEFT JOIN plan_servicio AS pls ON pls.id_plan_servicio = co.id_plan_servicio_c
        LEFT JOIN tipo_documento AS td ON td.id_tipo_documento = id_tipo_documento_c
        LEFT JOIN cliente AS cl ON cl.id_cliente = co.id_cliente_c WHERE co.id_cliente_c = '". $id_cliente_c ."'"; 
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function create($data) {

        $conexion= Database::connect();
        $queryInsert = "INSERT INTO pago_servicio (estado_pago, fecha_pago, monto_pago, fecha_vencimiento, id_contrato_ps) 
        VALUES ('". $data['estado_pago']."', '". $data['fecha_pago']."', '". $data['monto_pago']."', '". $data['fecha_vencimiento']."', '". $data['id_contrato_ps']."'')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE pago_servicio SET estado_pago = '". $data['estado_pago']."' WHERE id_pago_servicio = '".$data['id_pago_servicio']."'";
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