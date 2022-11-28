<?php

class ActualizarContratoController{
    function __construct(){
        //echo "esto funciona";
        $id_contrato = "";

        if(isset($_GET['id_contrato']) || !is_null($_GET['id_contrato'])){

            $id_contrato = $_GET['id_contrato'];

        }

        //Lo primero es llamar el modelo

        require_once "models/PlanServicioModel.php";
        $model_plan = new PlanServicioModel();
        require_once "models/TipoDocumentoModel.php";
        $model_documento = new TipoDocumentoModel();
        require_once "models/ContratoModel.php";
        $model_contrato = new ContratoModel();

        //Llamar datos del modelo

       if(!empty($_POST)){

            $model_contrato->update($_POST); 
                       
            return;
        }

        $datos_contrato = $model_contrato->getById($id_contrato);
        $datos_plan = $model_plan->getAll();
        $datos_documento = $model_documento->getAll();

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/contrato/actualizar_contrato.php";
        require_once "views/layout/footer.php";

    }

}