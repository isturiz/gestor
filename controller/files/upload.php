<?php
// var_dump($_FILES["file"]);
require_once('../../model/conexion.php');

$directorio = "../../uploads/";

$filePath = $directorio . basename($_FILES["file"]["name"]);

$fileName = pathinfo($filePath, PATHINFO_FILENAME);
$fileSize =  $_FILES["file"]["size"];
$fileFormat = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

session_start();
$cedulaUsuario = $_SESSION['cedula'];


if (move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {

  $consulta = "INSERT INTO archivo (nombre, peso, formato, ruta, cedulaUsuario) VALUES ('$fileName', '$fileSize', '$fileFormat', '$filePath', '$cedulaUsuario')";
  $resultado = mysqli_query($conexion, $consulta);

  header("location: ../../view/files/list.php");
} else {
  echo "Hubo un error en la subida del archivo";
}
