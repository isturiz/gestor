<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'repositorio';

try {
  $conexion = mysqli_connect($server, $username, $password, $database);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
} 

?>