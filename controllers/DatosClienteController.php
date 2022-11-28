<?php

class DatosClienteController{
    function __construct(){
        //echo "esto funciona";

        $id_cliente = "";

        if(isset($_GET['id_cliente']) || !is_null($_GET['id_cliente'])){

            $id_cliente = $_GET['id_cliente'];

        }
        //Lo primero es llamar el modelo

        require_once "models/RubroModel.php";
        $model_rubro = new RubroModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel();

        //Llamar datos del modelo

        if(!empty($_POST)){

            $model_cliente->update($_POST); 
                       
            return;
        }

        $datos_cliente = $model_cliente->getById($id_cliente);
        $datos_rubro = $model_rubro->getAll();

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/registros/datos_cliente.php";
        require_once "views/layout/footer.php";
        
    }

}