<?php

require_once('../../model/conexion.php');

// form variables
// $email = '';
// $password = '';
// $firstName = '';
// $lastName = '';
// $identificationCard = '';
// $phone = '';
// $userLevel = '';

if (isset($_GET['identificationCard'])) {
  $identificationCard = $_GET['identificationCard'];
  $query = "SELECT * FROM personal WHERE cedula = '$identificationCard'";
  $resultado = mysqli_query($conexion, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);

    $identificationCard = $row['cedula'];
    $firstName          = $row['nombre'];
    $lastName           = $row['apellido'];
    $phone              = $row['telefono'];
    $email              = $row['correo'];
    $password           = $row['contraseña'];
    $userLevel          = $row['idNivelUsuario'];

  }
}

if (isset($_POST['edit'])) {

  $identificationCard = $_POST['identificationCard'];

  //$email              = $_POST['email'];
  //$password           = $_POST['password'];
  $firstName          = $_POST['firstName'];
  //$lastName           = $_POST['lastName'];
  //$identificationCard = $_POST['identificationCard'];
  //$phone              = $_POST['phone'];
  //$userLevel          = $_POST['userLevel'];

  var_dump($firstName, $identificationCard);

  $query = "UPDATE personal set nombre = '$firstName' WHERE cedula = '$identificationCard'";

  //$query = "UPDATE personal set cedula = '$identificationCard', nombre = '$firstName', apellido = '$lastName', telefono = '$phone', correo = '$email', contraseña = '$password', idNivelUsuario = '$userLevel' WHERE cedula = $identificationCard";
  mysqli_query($conexion, $query);

  header("location: ../../view/users/list.php");
}
