<?php

class PersonalInactivoController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        
        require_once "models/PersonalModel.php";
        $model = new PersonalModel();

        //Llamar datos del modelo
        
        if(isset($_GET["id_estado"])){
            $model->updateEstado($_GET["id_estado"], 1);            
            header("refresh: 1; url=index.php?view=personal-inactivos");
        }

        $datos = $model->getAllByEstado(0); 

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/listar/personal_inactivo.php";
        require_once "views/layout/footer.php";

    }
}