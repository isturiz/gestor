<?php

require_once('../../model/conexion.php');

if (isset($_GET['id'])) {

$identificationCard = $_GET['id'];
$firstName          = $_GET['nombre'];

var_dump($identificationCard, $firstName);


//var_dump($firstName, $identificationCard);

//$query = "UPDATE personal set nombre = '$firstName' WHERE cedula = $identificationCard";
//mysqli_query($conexion, $query);

//header("location: ../../view/users/list.php");
}
