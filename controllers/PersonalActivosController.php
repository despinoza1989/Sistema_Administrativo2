<?php

class PersonalActivosController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        
        require_once "models/PersonalModel.php";
        $model = new PersonalModel();

        //Llamar datos del modelo
        
        if(isset($_GET["id_estado"])){
            $model->updateEstado($_GET["id_estado"], 0);            
            header("refresh: 1; url=index.php?view=personal-activos");
        }

        $datos = $model->getAllByEstado(1); 

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/listar/personal_activos.php";
        require_once "views/layout/footer.php";

    }
}