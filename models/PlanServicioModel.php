<?php

require_once 'config/db.php';

class PlanServicioModel {

    function getById($id_plan_servicio) {
        
        $conexion= Database::connect();
        $query = "SELECT id_plan_servicio, visita_mensual, asesorias, capacitaciones FROM plan_servicio WHERE id_plan_servicio  = '". $id_plan_servicio ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_plan_servicio, visita_mensual, asesorias, capacitaciones FROM plan_servicio";
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
        $queryInsert = "INSERT INTO plan_servicio (visita_mensual, asesorias, capacitaciones) VALUES ('". $data['visita_mensual']."', '". $data['asesorias']."', '". $data['capacitaciones']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE plan_servicio SET visita_mensual = '".$data['visita_mensual']."', asesorias = '".$data['asesorias']."', capacitaciones = '".$data['capacitaciones']."' WHERE id_plan_servicio = '".$data['id_plan_servicio']."'";
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