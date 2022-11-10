<?php

require_once('../../model/conexion.php');

if(isset($_GET['id'])) 
{


  $idFile = $_GET['id'];


  $sql = "SELECT nombre,formato FROM archivo WHERE idArchivo = '$idFile'";

  $result = mysqli_query($conexion, $sql);
  $arr = mysqli_fetch_array($result);
  $rutaEliminar = "../../uploads/" . $arr["nombre"] . "." . $arr['formato'];
  
  $query = "DELETE FROM archivo WHERE archivo.idArchivo = '$idFile'";

  $resultado = mysqli_query($conexion, $query);
  
  if(!$resultado)
  {
    die("Query Failed.");
  }

  header("location: ../../view/files/list.php");
}


if ($result) {
  unlink($rutaEliminar);
}
?>

?>