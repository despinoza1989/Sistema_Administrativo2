<?php

class PersonalController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 

        require_once "views/layout/registros/registro_cliente.php";

    }

    public function registrocliente(){

        //Llamar models del Personal
        
        require_once "models/AutentificacionModel.php";
   
    }

}