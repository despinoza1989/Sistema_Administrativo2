<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","sistema_administrativo");

$consulta="SELECT * FROM personal WHERE usuario='$usuario' AND contraseña='$contraseña'";
$consulta2="SELECT * FROM cliente WHERE usuario='$usuario' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$resultado2=mysqli_query($conexion,$consulta2);

$filas=mysqli_num_rows($resultado);
$filas2=mysqli_num_rows($resultado2);


if($filas || $filas2){
  
    header("location:home.php");

}else{
    echo "<script language='JavaScript'>
    alert('El nombre de usuario o la contraseña son incorrectas, favor ingresar nuevamente!');
    location.assign('index.php');
    </script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);