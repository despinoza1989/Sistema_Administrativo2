<?php

require_once 'config/db.php';

class ContratoModel {

    function getById($id_contrato) {
        
        $conexion= Database::connect();
        $query = "SELECT 
        co.id_contrato, co.fecha_inicio_c, co.fecha_fin_c, co.dia_pago, co.finalizado, co.id_cliente_c, co.id_plan_servicio_c, co.id_tipo_documento_c,
        cl.id_cliente, cl.rol_cliente, cl.razon_social_cliente, cl.telefono_cliente, cl.email_cliente, cl.direccion_cliente, cl.estado_usuario_cliente, cl.id_rubro,
        r.tipo_rubro,
        ps.id_plan_servicio, ps.nombre_plan, ps.descripcion_plan, ps.monto_plan,
        td.id_tipo_documento, td.tipo_documento
        FROM contrato AS co
        LEFT JOIN cliente AS cl ON cl.id_cliente = co.id_cliente_c
        LEFT JOIN rubro AS r ON r.id_rubro = cl.id_rubro
        LEFT JOIN plan_servicio AS ps ON ps.id_plan_servicio = co.id_plan_servicio_c
        LEFT JOIN tipo_documento AS td ON td.id_tipo_documento = co.id_tipo_documento_c WHERE co.id_contrato  = '". $id_contrato ."'";
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
        co.id_contrato, co.fecha_inicio_c, co.fecha_fin_c, co.dia_pago, co.finalizado, co.id_cliente_c, co.id_plan_servicio_c, co.id_tipo_documento_c,
        cl.id_cliente, cl.rol_cliente, cl.razon_social_cliente, cl.telefono_cliente, cl.email_cliente, cl.direccion_cliente, cl.estado_usuario_cliente, cl.id_rubro,
        r.tipo_rubro,
        ps.id_plan_servicio, ps.nombre_plan, ps.descripcion_plan, ps.monto_plan,
        td.id_tipo_documento, td.tipo_documento
        FROM contrato AS co
        LEFT JOIN cliente AS cl ON cl.id_cliente = co.id_cliente_c
        LEFT JOIN rubro AS r ON r.id_rubro = cl.id_rubro
        LEFT JOIN plan_servicio AS ps ON ps.id_plan_servicio = co.id_plan_servicio_c
        LEFT JOIN tipo_documento AS td ON td.id_tipo_documento = co.id_tipo_documento_c";
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
        $queryInsert = "INSERT INTO contrato (fecha_inicio_c, fecha_fin_c, dia_pago, id_cliente_c, id_plan_servicio_c, id_tipo_documento_c) 
        VALUES ('". $data['fecha_inicio_c']."', '". $data['fecha_fin_c']."', '". $data['dia_pago']."', '". $data['id_cliente_c']."', '". $data['id_plan_servicio_c']."', '". $data['id_tipo_documento_c']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE contrato SET fecha_inicio_c = '". $data['fecha_inicio_c']."', fecha_fin_c = '". $data['fecha_fin_c']."', 
        dia_pago = '". $data['dia_pago']."', finalizado = '0', id_plan_servicio_c = '". $data['id_plan_servicio_c']."', id_tipo_documento_c = '". $data['id_tipo_documento_c']."' 
        WHERE id_contrato = '".$data['id_contrato']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_tipo_asesoria) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM contrato WHERE id_contrato ='".$id_contrato."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>