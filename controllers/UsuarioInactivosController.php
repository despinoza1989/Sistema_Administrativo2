<?php

class UsuarioInactivosController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 
        require_once "views/layout/header.php";
        require_once "views/layout/listar/usuario_inactivos.php";
        require_once "views/layout/footer.php";

    }

    public function registropersonal(){

        //Llamar models del Personal
        
        require_once "models/AutentificacionModel.php";
   
    }

}