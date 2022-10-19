<?php

class CrearMejoraController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/MejoraModel.php";
        $model_mejoras = new MejoraModel();
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();

        //Llamar datos del modelo
        $datos_cliente = $model_cliente->getAll();
        $datosusuario = $_SESSION['usuario'];
        $dato_asignacion = $model_asignacion->getAllByPersonal($datosusuario['id_personal']);

        if(isset($_POST["accion"])){
            $model_mejoras->create($_POST);            
            return;
        }

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/mejora/crear_mejora.php";
        require_once "views/layout/footer.php";

    }

}