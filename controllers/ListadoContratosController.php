<?php

class ListadoContratosController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo


        require_once "models/ContratoModel.php";
        $model_contrato = new ContratoModel();

        //Llamar datos del modelo

        $datos_contrato = $model_contrato->getAll();


        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/contrato/listado_contratos.php";
        require_once "views/layout/footer.php";

    }

}