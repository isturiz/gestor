<script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

<?php require_once('../../view/header/header.php'); ?>


<!-- PRUEBA DE CONEXION -->
<?php

require_once("../../model/conexion.php");


$revisarConex = new Conectar;
$revisarConex->conexion();

?>

<div class="h-screen w-full flex flex-row">

  <?php require_once('../../view/header/aside.php'); ?>

  <!-- ========== MAIN ========== -->
  <div class="flex-grow bg-gray-700">
    <main class="container">
      <div class="overflow-x-auto relative w-full p-8">
        <?php require_once('../../view/gestor/fileList.php'); ?>
      </div>
    </main>
  </div>