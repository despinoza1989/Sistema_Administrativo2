<?php

class LoginController{
    function __construct(){
        //echo "esto funciona";

        //Lo primero es llamar el modelo

        //Llamar datos del modelo

        //Llamar a la vista 

        require_once "views/layout/login/login.php";

    }

    public function validar($usuario, $password){

        require_once "models/AutentificacionModel.php";

        $model= new AutentificacionModel();
        $isvalid= $model->doLogin($usuario, $password);
        echo $usuario;

        if($isvalid=='1'){

            require_once "HomeController.php";
            $ctrl = new HomeController();
            
        }else{

            echo "usuario no valido";
        }
    }

}