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
        $respuesta= $model->doLogin($usuario, $password); 


        if($respuesta['isvalid']=='1'){

            $datosusuario= $model->obtenerUsuario($respuesta['id_personal']);
            $_SESSION['usuario']=$datosusuario;
            $_SESSION["activa"]=true;
            header("refresh: 1; url=index.php?view=home");
            
        }else{

            echo "<center>Usuario no valido</center>";
        }
    }

}