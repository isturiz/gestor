<?php

require_once('../../model/conexion.php');

//   $consulta = "INSERT INTO archivo (nombre, peso, formato) VALUES ('$fileName', '$fileSize', '$fileFormat')";
//   $resultado = mysqli_query($conexion, $consulta);

//   $consulta = "INSERT INTO ruta (direccion) VALUES ('$filePath')";
//   $resultado = mysqli_query($conexion, $consulta);

//   header("location: ../../view/files/list.php");
// } else {
//   echo "Hubo un error en la subida del archivo";
// }

if (isset($_POST['register'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $identificationCard = $_POST['identificationCard'];
  $phone = $_POST['phone'];
  $userLevel = $_POST['userLevel'];
}


$consulta = "INSERT INTO personal (cedula, nombre, apellido, telefono, correo, contraseña, idNivelUsuario) VALUES ('$identificationCard', '$firstName', '$lastName', '$phone', '$email', '$password', '$userLevel')";
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
  die("Query Failed.");
}

header("location: ../../view/users/list.php");

?>

