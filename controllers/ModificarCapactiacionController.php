<?php

class ModificarCapactiacionController{
    function __construct(){
        //echo "esto funciona";

        $id_crear_capacitacion = "";

        if(isset($_GET['id_crear_capacitacion']) || !is_null($_GET['id_crear_capacitacion'])){

            $id_crear_capacitacion = $_GET['id_crear_capacitacion'];

        }
        //Lo primero es llamar el modelo

        require_once "models/CrearCapacitacionModel.php";
        $model_capacitacion = new CrearCapacitacionModel();
        require_once "models/TipoPersonalCapacitacionModel.php";
        $model_tipo_personal_capacitacion = new TipoPersonalCapacitacionModel();

        if(!empty($_POST)){

            $model_capacitacion->update($_POST);
           
            return;
        }

        //Llamar datos del modelo
        $datos_tipo_personal_capacitacion = $model_tipo_personal_capacitacion->getAll();
        $datos_capacitacion = $model_capacitacion->getById($id_crear_capacitacion);




        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/capacitacion/modificar_capacitacion.php";
        require_once "views/layout/footer.php";
        
    }

}