<?php

class CrearCapacitacionController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo
        require_once "models/RubroModel.php";
        $model_rubro = new RubroModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();
        require_once "models/CrearCapacitacionModel.php";
        $model_crear_capacitacion = new CrearCapacitacionModel();
        require_once "models/TipoPersonalCapacitacionModel.php";
        $model_tipo_personal_capacitacion = new TipoPersonalCapacitacionModel();


        //Llamar datos del modelo
        if(isset($_POST["accion"])){
            $model_crear_capacitacion->create($_POST);            
            return;
        }

        $datos_tipo_personal_capacitacion = $model_tipo_personal_capacitacion->getAll();
        $datos_cliente = $model_cliente->getAll();
        $datosusuario = $_SESSION['usuario'];


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/crear_capacitacion.php";
        require_once "views/layout/footer.php";

    }

}