<?php

require_once('../../model/conexion.php');

$cedula = $_POST['cedula'];
$contraseña = $_POST['clave'];

session_start();
$_SESSION['cedula'] = $cedula;

$consulta = "SELECT * FROM personal WHERE cedula='$cedula' AND contraseña='$contraseña'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);


if($filas){
  
  header("location: ../../view/files/list.php");

}else{
  
  header("location: ../../view/system/alertFail.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>