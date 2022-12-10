<?php

require_once('../../model/conexion.php');

if(isset($_GET['id'])) 
{

  $identificationCard = $_GET['id'];
  $query = "DELETE FROM personal WHERE cedula = '$identificationCard'";

  $resultado = mysqli_query($conexion, $query);
  
  if(!$resultado)
  {
    die("Query Failed.");
  }

  header("location: ../../view/users/list.php");
}

?>