<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","sistema_administrativo");

$consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    echo "<script language='JavaScript'>
    alert('El nombre de usuario o la contraseña son incorrectas, favor ingresar nuevamente!');
    location.assign('index.php');
    </script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
