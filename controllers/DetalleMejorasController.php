<?php

class DetalleMejorasController{
    function __construct(){
        //echo "esto funciona";
        $id_mejoras = "";
    
        if(isset($_GET['id_mejoras']) || !is_null($_GET['id_mejoras'])){

            $id_mejoras = $_GET['id_mejoras'];

        }
        //Lo primero es llamar el modelo

        require_once "models/MejoraModel.php";
        $model_mejora = new MejoraModel();
        require_once "models/AsignacionProfesionalModel.php";
        $model_asignacion = new AsignacionProfesionalModel();
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel();
        require_once "models/ClienteModel.php";
        $model_cliente = new ClienteModel(); 



        //Llamar datos del modelo
        //$datosusuariocliente = $model_cliente->getAll();
        //$datosusuario = $_SESSION['usuario'];
        $datos_mejora = $model_mejora->getById($id_mejoras);
        
        

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/mejora/detalle_mejoras.php";
        require_once "views/layout/footer.php";

    }

}