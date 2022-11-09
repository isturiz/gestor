<?php
// var_dump($_FILES["file"]);
require_once('../../model/conexion.php');

$directorio = "../../uploads/";

$filePath = $directorio . basename($_FILES["file"]["name"]);

$fileName = $_FILES["file"]["name"];
$fileSize =  $_FILES["file"]["size"];
$fileFormat = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));


if (move_uploaded_file($_FILES["file"]["tmp_name"], $filePath)) {

  $consulta = "INSERT INTO archivo (nombre, peso, formato) VALUES ('$fileName', '$fileSize', '$fileFormat')";
  $resultado = mysqli_query($conexion, $consulta);

  header("location: ../../view/files/fileList.php");
} else {
  echo "Hubo un error en la subida del archivo";
}
