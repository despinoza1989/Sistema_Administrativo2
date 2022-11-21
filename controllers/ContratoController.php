<?php

class ContratoController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/RubroModel.php";
        $model_rubro = new RubroModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();
        require_once "models/PlanServicioModel.php";
        $model_plan = new PlanServicioModel();
        require_once "models/TipoDocumentoModel.php";
        $model_documento = new TipoDocumentoModel();
        require_once "models/ContratoModel.php";
        $model_contrato = new ContratoModel();

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_contrato->create($_POST);            
            return;
        }

        $datos_rubro = $model_rubro->getAll();
        $datos_cliente = $model_cliente->getAll();
        $datos_plan = $model_plan->getAll();
        $datos_documento = $model_documento->getAll();

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/contrato/contrato.php";
        require_once "views/layout/footer.php";
        
    }

}