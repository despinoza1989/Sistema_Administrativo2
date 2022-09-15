<?php

require_once 'config/db.php';

class AutentificacionModel{

    function __construct(){

    }

    public function doLogin($usuario, $password){

        //return array('isvalid'=>'0');
        
        $consulta="SELECT usuario_personal, id_personal FROM personal WHERE usuario_personal='$usuario' AND password_personal='$password'";
        $conexion= Database::connect();
        $resultado=$conexion->query($consulta);
        $loginvalido='0';

        $respuesta=array('isvalid'=>'0');

        while($row=mysqli_fetch_assoc($resultado)){           

            if($row['usuario_personal']==$usuario){
                $loginvalido='1';
                $respuesta=(array)$row;
            }

        }
        $resultado->close();
        $conexion->close();
        $respuesta['isvalid']=$loginvalido;

        return $respuesta;
    }

    public function obtenerUsuario($id_personal){
        
        $consulta="SELECT p.id_personal, p.rut_personal, p.telefono_personal, p.nombre_personal, p.apellidos_personal, p.email_personal, 
        p.fecha_nacimiento_p, p.usuario_personal, p.estado_usuario_personal, p.id_tipo_usuario_p, p.id_estado_civil, p.id_genero,
        ec.tipo_estado_civil, g.tipo_genero, tp.tipo_usuario
        FROM personal AS p 
        LEFT JOIN estado_civil as ec ON ec.id_estado_civil = p.id_estado_civil
        LEFT JOIN genero as g ON g.id_genero = p.id_genero
        LEFT JOIN tipo_usuario AS tp ON tp.id_tipo_usuario = p.id_tipo_usuario_p
        WHERE p.id_personal='$id_personal'";
        $conexion= Database::connect();
        $resultado=mysqli_query($conexion,$consulta);
        $respuesta=array();

        while($row=$resultado->fetch_assoc()){
            $respuesta=$row;
            
        }

        $resultado->close();
        $conexion->close();
        return $respuesta;
    }

}