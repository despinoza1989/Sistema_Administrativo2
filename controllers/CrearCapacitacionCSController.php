<?php

class CrearCapacitacionCSController{
    function __construct(){
        //echo "esto funciona";
        $id_solicitud_capacitacion = "";

        if(isset($_GET['id_solicitud_capacitacion']) || !is_null($_GET['id_solicitud_capacitacion'])){

            $id_solicitud_capacitacion = $_GET['id_solicitud_capacitacion'];

        }


        //Lo primero es llamar el modelo
        require_once "models/SolicitudCapacitacionModel.php";
        $model_solicitud_capacitacion = new SolicitudCapacitacionModel();
        require_once "models/CrearCapacitacionModel.php";
        $model_crear_capacitacion = new CrearCapacitacionModel();
        require_once "models/TipoPersonalCapacitacionModel.php";
        $model_tipo_personal_capacitacion = new TipoPersonalCapacitacionModel();


        //Llamar datos del modelo
        if(isset($_POST["accion"])){
            $model_crear_capacitacion->create($_POST);            
            return;
        }

        //$datos_tipo_personal_capacitacion = $model_tipo_personal_capacitacion->getAll();
        $datosusuario = $_SESSION['usuario'];
        $datos_solicitud_capacitacion = $model_solicitud_capacitacion->getById($id_solicitud_capacitacion);


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/crear_capacitacioncs.php";
        require_once "views/layout/footer.php";

    }

}