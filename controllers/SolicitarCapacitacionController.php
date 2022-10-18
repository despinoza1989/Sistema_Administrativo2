<?php

class SolicitarCapacitacionController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/SolicitudCapacitacionModel.php";
        $model_solicitud_capacitacion = new SolicitudCapacitacionModel();
        require_once "models/TipoPersonalCapacitacionModel.php";
        $model_tipo_personal_capacitacion = new TipoPersonalCapacitacionModel();

        //Llamar datos del modelo
        if(isset($_POST["accion"])){
            $model_solicitud_capacitacion->create($_POST);            
            return;
        }

        
        $datosusuariocliente = $_SESSION['usuarioCliente'];
        $datos_tipo_personal_capacitacion = $model_tipo_personal_capacitacion->getAll();

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/solicitud_capacitacion.php";
        require_once "views/layout/footer.php";

    }

}