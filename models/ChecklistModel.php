<?php

require_once 'config/db.php';

class ChecklistModel {

    function getById($id_check_list) {
        
        $conexion= Database::connect();
        $query = "SELECT ck.fecha_check_list, ck.senaleticas, ck.estado_contratos, ck.estado_extintores, 
        ck.instalaciones_electricas, ck.instalaciones_sanitarias, ck.libro_asistencia, ck.alarma_incendios, ck.alumbrado_emergencia,
        ck.salida_emergencia, ck.documentacion_trabajador, ck.agua_potable, ck.centro_mutual, ck.obs_check_general, ck.protectores_auditivos,
        ck.casco_seguridad, ck.zapatos_seguridad, ck.guantes_protectores, ck.gafas_seguridad, ck.mascarilla_respiratoria, ck.obs_check_proteccion,
        ck.herramientas_adecuadas, ck.inspeccion_materiales, ck.cableado_herramientas, ck.proteccion_herramientas, ck.obs_check_herramientas,
        ck.luces_maquinarias, ck.estanque_combustible, ck.motor_maquinaria, ck.frenos_maquinaria, ck.boton_emergencia_maq, 
        ck.esp_tecnicas_maq, ck.inspeccion_materiales, ck.obs_check_maquinaria,
        p.rut_personal, p.telefono_personal, p.nombre_personal, 
        p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal,
        p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente,
        c.usuario_cliente, c.tipo_usuario_c, r.tipo_rubro        
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
        $query = "SELECT ck.fecha_check_list, ck.senaleticas, ck.estado_contratos, ck.estado_extintores, 
        ck.instalaciones_electricas, ck.instalaciones_sanitarias, ck.libro_asistencia, ck.alarma_incendios, ck.alumbrado_emergencia,
        ck.salidas_emergencia, ck.documentacion_trabajador, ck.agua_potable, ck.centro_mutual, ck.obs_check_general, ck.protectores_auditivos,
        ck.casco_seguridad, ck.zapato_seguridad, ck.guantes_protectores, ck.gafas_seguridad, ck.mascarilla_respiratoria, ck.obs_check_proteccion,
        ck.herramientas_adecuadas, ck.inspeccion_materiales, ck.cableado_herramientas, ck.proteccion_herramientas, ck.obs_check_herramientas,
        ck.luces_maquinarias, ck.estanque_combustible, ck.motor_maquinaria, ck.frenos_maquinaria, ck.boton_emergencia_maq, 
        ck.esp_tecnicas_maq, ck.insepeccion_maquinaria, ck.obs_check_maquinaria,
        p.rut_personal, p.telefono_personal, p.nombre_personal, 
        p.apellidos_personal, p.email_personal, p.direccion_personal, p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal,
        p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        c.rol_cliente, c.razon_social_cliente, c.telefono_cliente, c.email_cliente, c.direccion_cliente, c.estado_usuario_cliente,
        c.usuario_cliente, c.tipo_usuario_c, r.tipo_rubro
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

    function create($data) {

        $conexion= Database::connect();
        $queryInsert = "INSERT INTO check_list (fecha_check_list, senaleticas, estado_contratos, estado_extintores, 
        instalaciones_electricas, instalaciones_sanitarias, libro_asistencia, alarma_incendios, alumbrado_emergencia,
        salidas_emergencia, documentacion_trabajador, agua_potable, centro_mutual, obs_check_general, protectores_auditivos,
        casco_seguridad, zapato_seguridad, guantes_protectores, gafas_seguridad, mascarilla_respiratoria, obs_check_proteccion,
        herramientas_adecuadas, inspeccion_materiales, cableado_herramientas, proteccion_herramientas, obs_check_herramientas,
        luces_maquinarias, estanque_combustible, motor_maquinaria, frenos_maquinaria, boton_emergencia_maq, 
        esp_tecnicas_maq, insepeccion_maquinaria, obs_check_maquinaria, id_personal_ckl, id_cliente_ckl, id_rubro_ckl )
        VALUES ('". $data['fecha_check_list']."', '". $data['senaleticas']."', '". $data['estado_contratos']."', '". $data['estado_extintores']."',
        '". $data['instalaciones_electricas']."', '". $data['instalaciones_sanitarias']."', '". $data['libro_asistencia']."', '". $data['alarma_incendios']."',
        '". $data['alumbrado_emergencia ']."', '". $data['salidas_emergencia']."', '". $data['documentacion_trabajador ']."', '". $data['agua_potable']."',
        '". $data['centro_mutual']."', '". $data['obs_check_general']."', '". $data['protectores_auditivos']."', '". $data['casco_seguridad']."',
        '". $data['zapato_seguridad']."', '". $data['guantes_protectores']."', '". $data['gafas_seguridad']."', '". $data['mascarilla_respiratoria']."',
        '". $data['obs_check_proteccion']."', '". $data['herramientas_adecuadas']."', '". $data['inspeccion_materiales ']."', '". $data['cableado_herramientas']."',
        '". $data['proteccion_herramientas']."', '". $data['obs_check_herramientas']."', '". $data['luces_maquinarias']."', '". $data['estanque_combustible']."',
        '". $data['motor_maquinaria']."', '". $data['frenos_maquinaria']."', '". $data['boton_emergencia_maq']."', '". $data['esp_tecnicas_maq']."',
        '". $data['insepeccion_maquinaria']."', '". $data['obs_check_maquinaria']."', '". $data['id_personal_ckl']."', '". $data['id_cliente_ckl']."', '". $data['id_rubro_ckl']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE check_list SET fecha_check_list = '". $data['fecha_check_list']."', senaleticas = '". $data['senaleticas']."', estado_contratos = '". $data['estado_contratos']."', estado_extintores = '". $data['estado_extintores']."', instalaciones_electricas = '". $data['instalaciones_electricas']."', instalaciones_sanitarias = '". $data['instalaciones_sanitarias']."', libro_asistencia = '". $data['libro_asistencia']."', alarma_incendios = '". $data['alarma_incendios']."', alumbrado_emergencia = '". $data['alumbrado_emergencia']."', salida_emergencia = '". $data['salida_emergencia']."', documentacion_trabajador = '". $data['documentacion_trabajador']."', agua_potable = '". $data['agua_potable']."', centro_mutual = '". $data['centro_mutual']."', 
        obs_check_general = '". $data['obs_check_general']."', protectores_auditivos = '". $data['protectores_auditivos']."', casco_seguridad = '". $data['casco_seguridad']."', zapatos_seguridad = '". $data['zapatos_seguridad']."', guantes_protectores = '". $data['guantes_protectores']."', gafas_seguridad = '". $data['gafas_seguridad']."', mascarilla_respiratoria = '". $data['mascarilla_respiratoria']."', obs_check_proteccion = '". $data['obs_check_proteccion']."', herramientas_adecuadas = '". $data['herramientas_adecuadas']."', inspeccion_materiales = '". $data['inspeccion_materiales']."', cableado_herramientas = '". $data['cableado_herramientas']."', proteccion_herramientas = '". $data['proteccion_herramientas']."', obs_check_herramientas = '". $data['obs_check_herramientas']."', luces_maquinarias = '". $data['luces_maquinarias']."', 
        estanque_combustible = '". $data['estanque_combustible']."', motor_maquinaria = '". $data['motor_maquinaria']."', frenos_maquinaria = '". $data['frenos_maquinaria']."', boton_emergencia_maq = '". $data['boton_emergencia_maq']."', esp_tecnicas_maq = '". $data['esp_tecnicas_maq']."', inspeccion_maquinaria = '". $data['inspeccion_maquinaria']."', obs_check_maquinaria = '". $data['obs_check_maquinaria']."', WHERE id_check_list = '".$data['id_check_list']."'";
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