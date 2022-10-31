<?php

class DetalleCapacitacionController{
    function __construct(){
        //echo "esto funciona";

        $id_crear_capacitacion = "";

        if(isset($_GET['id_crear_capacitacion']) || !is_null($_GET['id_crear_capacitacion'])){

            $id_crear_capacitacion = $_GET['id_crear_capacitacion'];

        }
        //Lo primero es llamar el modelo

        require_once "models/CrearCapacitacionModel.php";
        $model_capacitacion = new CrearCapacitacionModel();


        //Llamar datos del modelo

        $datos_capacitacion = $model_capacitacion->getByDetalleCapacitacion($id_crear_capacitacion);
        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/detalle_capacitacion.php";
        require_once "views/layout/footer.php";
        
    }

}