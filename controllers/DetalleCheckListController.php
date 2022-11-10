<?php

class DetalleCheckListController{
    function __construct(){
        //echo "esto funciona";
        $id_check_list = "";
    
        if(isset($_GET['id_check_list']) || !is_null($_GET['id_check_list'])){

            $id_check_list = $_GET['id_check_list'];

        }

        //Lo primero es llamar el modelo

        require_once "models/ChecklistModel.php";
        $model_check_list = new ChecklistModel();

        //Llamar datos del modelo
        
        $datos_check_list = $model_check_list->getByDetalleCheckList($id_check_list);


        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/checklist/detalle_check_list.php";
        require_once "views/layout/footer.php";

    }

}