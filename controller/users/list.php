<?php

require_once('../../model/conexion.php');

$query = "SELECT * FROM personal";
$files = mysqli_query($conexion, $query);    


?>