<?php

require_once('../../model/conexion.php');

if(isset($_GET['id'])) 
{

  //Datos del personal
  $dat = "SELECT cedula, nombre, apellido FROM personal";
  $result_datos = mysqli_query($conexion, $dat);
  $arr_datos = mysqli_fetch_array($result_datos);


  $idFile = $_GET['id'];


  $sql = "SELECT * FROM archivo WHERE idArchivo = '$idFile'";

  $result = mysqli_query($conexion, $sql);
  $arr = mysqli_fetch_array($result);
  $rutaEliminar = "../../uploads/" . $arr["nombre"] . "." . $arr['formato'];


  //datos necesarios para la insercion
  $dato1 = $arr['idArchivo'];
  $dato2 = $arr_datos['cedula'];
  $dato3 = $arr["nombre"] . '.' . $arr['formato'];
  $dato4 = "Eliminacion";
  $dato5 = $arr_datos['nombre'] . " " . $arr_datos['apellido'];
  $query = "DELETE FROM archivo WHERE archivo.idArchivo = '$idFile'";

  $resultado = mysqli_query($conexion, $query);


  
  //Ingresar informacion del usuario que borró el archivo
  $query_interact = "INSERT INTO uso (idArchivo, Personal_cedula, tipo_interaccion, nombre_archivo, nombre_personal) VALUES ('$dato1', '$dato2', '$dato4', '$dato3', '$dato5')";

  $result_interact = mysqli_query($conexion, $query_interact);



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