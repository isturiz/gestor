<?php

require_once('../../model/conexion.php');

// var_dump($_POST['email']);




  $identificationCard = $_GET['id'];

  $email              = $_POST['email'];
  $password           = $_POST['password'];
  $firstName          = $_POST['firstName'];
  $lastName           = $_POST['lastName'];
  $identificationCard = $_POST['identificationCard'];
  $phone              = $_POST['phone'];
  $userLevel          = $_POST['userLevel'];

  $query = "UPDATE personal set cedula = '$identificationCard', nombre = '$firstName', apellido = '$lastName', telefono = '$phone', correo = '$email', contraseña = '$password', idNivelUsuario = '$userLevel' WHERE cedula = $identificationCard";
  mysqli_query($conexion, $query);
  header("location: ../../view/users/list.php");


