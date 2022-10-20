<?php

class ListarSolicitudesCapacitacionesController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/SolicitudCapacitacionModel.php";
        $model_solicitudes = new SolicitudCapacitacionModel();


        //Llamar datos del modelo

        $datos_solicitudes = $model_solicitudes->getAll();


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/listado_solicitud_capacitaciones.php";
        require_once "views/layout/footer.php";

    }

    public function registropersonal(){

        //Llamar models del Personal
        
        require_once "models/AutentificacionModel.php";
   
    }

}