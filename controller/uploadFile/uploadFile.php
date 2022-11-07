<?php
// var_dump($_FILES["file"]);

$directorio = "../../uploads/";

$archivo = $directorio . basename($_FILES["file"]["name"]);

$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

$size = $_FILES["file"]["size"];

if ($size > 500000) {
  echo "El archivo tiene que ser menor a 500kb";
} else {

  if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {
    header("location: ../../view/system/main.php");
  } else {
    echo "Hubo un error en la subida del archivo";
  }
}
