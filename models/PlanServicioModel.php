<?php

require_once 'config/db.php';

class PlanServicioModel {

    function getById($id_plan_servicio) {
        
        $conexion= Database::connect();
        $query = "SELECT id_plan_servicio, nombre_plan, descripcion_plan, monto_plan FROM plan_servicio WHERE id_plan_servicio  = '". $id_plan_servicio ."'";
        $result = $conexion->query($query);
        $response = array();
        while($row = mysqli_fetch_assoc($result)) { $response = $row; }
        $result->close();
        $conexion->close();
        return $response;
    }

    function getAll() {

        $conexion= Database::connect();
        $query = "SELECT id_plan_servicio, nombre_plan, descripcion_plan, monto_plan FROM plan_servicio";
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
        $queryInsert = "INSERT INTO plan_servicio (nombre_plan, descripcion_plan, monto_plan) VALUES ('". $data['nombre_plan']."', '". $data['descripcion_plan']."', '". $data['monto_plan']."')";
        $result = $conexion->query($queryInsert);
        $conexion->close();
        return $result;
    }

    function update($data) {

        $conexion= Database::connect();
        $queryUpdate = "UPDATE plan_servicio SET nombre_plan = '".$data['nombre_plan']."', descripcion_plan = '".$data['descripcion_plan']."', monto_plan = '".$data['monto_plan']."' WHERE id_plan_servicio = '".$data['id_plan_servicio']."'";
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