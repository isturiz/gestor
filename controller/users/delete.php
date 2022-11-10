<?php

require_once('../../model/conexion.php');

if(isset($_GET['cedula'])) 
{

  $user = $_GET['cedula'];
  $query = "DELETE FROM personal WHERE cedula = '$user'";

  $resultado = mysqli_query($conexion, $query);
  
  if(!$resultado)
  {
    die("Query Failed.");
  }

  header("location: ../../view/users/list.php");
}

?>