<?php

require_once('../../model/conexion.php');

if(isset($_GET['id'])) 
{


  $idFile = $_GET['id'];
  $query = "DELETE FROM archivo WHERE archivo.idArchivo = '$idFile'";

  $resultado = mysqli_query($conexion, $query);
  
  if(!$resultado)
  {
    die("Query Failed.");
  }

  header("location: ../../view/files/fileList.php");
}

?>