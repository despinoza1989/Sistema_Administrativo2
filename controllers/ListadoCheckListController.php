<?php

class ListadoCheckListController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/ChecklistModel.php";
        $model = new ChecklistModel();

        //Llamar datos del modelo
        
        //$datos_check = $model->getAll();
        $datosusuario = $_SESSION['usuario'];
        $datos_check = $model->getBylistadoPersonal($datosusuario['id_personal']); 

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/checklist/listado_check_list.php";
        require_once "views/layout/footer.php";

    }

}