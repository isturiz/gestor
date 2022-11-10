<?php

require_once('../../model/conexion.php');

if(isset($_GET['identificationCard'])) 
{

  $identificationCard = $_GET['identificationCard'];
  $query = "DELETE FROM personal WHERE cedula = '$identificationCard'";

  $resultado = mysqli_query($conexion, $query);
  
  if(!$resultado)
  {
    die("Query Failed.");
  }

  header("location: ../../view/users/list.php");
}

?>