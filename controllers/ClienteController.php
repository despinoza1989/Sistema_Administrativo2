<?php

class ClienteController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/RubroModel.php";
        $model_rubro = new RubroModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_cliente->create($_POST);            
            return;
        }

        $datos_rubro = $model_rubro->getAll();

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/registros/registro_cliente.php";
        require_once "views/layout/footer.php";
        
    }

}