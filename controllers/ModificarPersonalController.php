<?php

class ModificarPersonalController{
    function __construct(){
        //echo "esto funciona";
        $id_personal = "";

        if(isset($_GET['id_personal']) || !is_null($_GET['id_personal'])){

            $id_personal = $_GET['id_personal'];

        }

        //Lo primero es llamar el modelo

        require_once "models/GeneroModel.php";
        $model_genero = new GeneroModel();
        require_once "models/TipoUsuarioModel.php";
        $model_tipo_usuario = new TipoUsuarioModel;
        require_once "models/EstadoCivilModel.php";
        $model_estado_civil = new EstadoCivilModel;
        require_once "models/PersonalModel.php";
        $model_personal = new PersonalModel;

        //Llamar datos del modelo

        if(isset($_POST["accion"])){
            $model_personal->update($_POST);            
            return;
        }

        $datos_personal = $model_personal->getById($id_personal);
        $datos_genero = $model_genero->getAll();
        $datos_tipo_usuario = $model_tipo_usuario->getAll();
        $datos_estado_civil = $model_estado_civil->getAll();

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/registros/modificar_personal.php";
        require_once "views/layout/footer.php";

    }

}