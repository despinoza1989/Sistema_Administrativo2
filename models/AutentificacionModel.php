<?php

require_once 'config/db.php';

class AutentificacionModel{

    function __construct(){

    }

    public function doLogin($usuario, $password){

        $consulta="SELECT * FROM personal WHERE usuario='$usuario' AND password='$password'";
        $conexion= Database::connect();
        $resultado=mysqli_query($conexion,$consulta);

        $loginvalido=false;

        while($row=$resultado->fetch_assoc()){
            if($row['usuario']==$usuario){
                $loginvalido=true;
            }
            
        }
        return $loginvalido;
    }
}