<?php

require_once('../../model/conexion.php');

$query = "SELECT * FROM archivo";
$files = mysqli_query($conexion, $query);    


?>