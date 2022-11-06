<?php

require_once('../../model/conexion.php');

$cedula = $_POST['cedula'];
$contraseña = $_POST['clave'];


echo '<script type="text/JavaScript">console.log("work database conection")</script>';


session_start();
$_SESSION['cedula'] = $cedula;

$consulta = "SELECT * FROM personal WHERE cedula='$cedula' AND contraseña='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if($filas){
  
  header("location: ../../view/system/main.php");

}else{
  echo '<script type="text/JavaScript">console.log("login error")</script>';

  // header("location: ../../Vista/Sistema/error_autenticacion.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>