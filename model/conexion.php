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

/*
class Conectar
{
	public function conexion()
	{
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$base = "repositorio";


		$conexion = mysqli_connect(
			$servidor,
			$usuario,
			$password,
			$base
		) or die("Error al conectar");

		if ($conexion) {
			echo '<script type="text/JavaScript">console.log("work database conection")</script>';
		};

	}
}
*/
?>