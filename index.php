<?php require_once('./view/header/htmlStart.php'); ?>


<?php require_once("./model/conexion.php");
  $revisarConex = new Conectar;
  $revisarConex->conexion();
?>
  

<?php require_once('./view/system/login.php'); ?>

<?php require_once('./view/header/htmlEnd.php'); ?>
