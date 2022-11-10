<?php

class ListadoCheckListAdminController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        require_once "models/ChecklistModel.php";
        $model = new ChecklistModel();

        //Llamar datos del modelo
        
        $datos = $model->getAll(); 

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/checklist/listado_check_list_admin.php";
        require_once "views/layout/footer.php";

    }

}