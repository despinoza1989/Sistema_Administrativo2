<?php

require_once 'config/db.php';

class PlanServicioModel {

    function getById($id_plan_servicio) {
        
        $conexion= Database::connect();
        $query = "SELECT id_plan_servicio, valor_visita_mensual, valor_asesorias, valor_capacitaciones, valor_mejoras, valor_check_list FROM plan_servicio WHERE id_plan_servicio  = '". $id_plan_servicio ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_plan_servicio, valor_visita_mensual, valor_asesorias, valor_capacitaciones, valor_mejoras, valor_check_list FROM plan_servicio";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {

           $response[] = $row; 
        }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getMontoTotal() {

        $conexion= Database::connect();
        $query = "SELECT SUM(valor_visita_mensual+valor_asesorias+valor_capacitaciones+valor_mejoras+valor_check_list) AS total FROM plan_servicio";
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
        $queryInsert = "INSERT INTO plan_servicio (valor_visita_mensual, valor_asesorias, valor_capacitaciones, valor_mejoras, valor_check_list) VALUES ('". $data['valor_visita_mensual']."', '". $data['valor_asesorias']."', '". $data['valor_capacitaciones']."', '". $data['valor_mejoras']."', '". $data['valor_check_list']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE plan_servicio SET valor_visita_mensual = '".$data['valor_visita_mensual']."', valor_asesorias = '".$data['valor_asesorias']."', valor_capacitaciones = '".$data['valor_capacitaciones']."', valor_mejoras = '".$data['valor_mejoras']."', valor_check_list = '".$data['valor_check_list']."' WHERE id_plan_servicio = '".$data['id_plan_servicio']."'";
        $result = $conexion->query($queryUpdate);
        $conexion->close();
        return $result;
    }

    function delete($id_plan_servicio) {

        $conexion= Database::connect();
        $queryDelete = "DELETE FROM plan_servicio WHERE id_plan_servicio ='".$id_plan_servicio."'";
        $result = $conexion->query($queryDelete);
        $conexion->close();
        return $result;
    }
}
?>