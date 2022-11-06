<?php require_once('../../view/header/htmlStart.php'); ?>


<?php require_once('../../view/header/header.php'); ?>


<!-- PRUEBA DE CONEXION -->
<?php

require_once("../../model/conexion.php");

?>

<div class="h-screen w-full flex flex-row">

  <?php require_once('../../view/header/aside.php'); ?>

  <!-- ========== MAIN ========== -->
  <div class="flex-grow bg-gray-700">
    <main class="container">
      <div class="overflow-x-auto relative w-full p-8 ">
        <table class="w-full text-sm text-left text-gray-400">
          <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
              <th scope="col" class="py-3 px-6">File name</th>
              <th scope="col" class="py-3 px-6">Format</th>
              <th scope="col" class="py-3 px-6">Category</th>
              <th scope="col" class="py-3 px-6">Size</th>
              <th scope="col" class="py-3 px-6 text-right">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
              <th scope="row" class="py-4 px-6 font-medium text-white whitespace-nowrap">
                Apple MacBook Pro 17"
              </th>
              <td class="py-4 px-6">Sliver</td>
              <td class="py-4 px-6">Laptop</td>
              <td class="py-4 px-6">$2999</td>
              <td class="py-4 px-6 text-right">
                <a href="#" class="font-medium text-blue-500 hover:underline">Edit</a>
              </td>
            </tr>
            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
              <th scope="row" class="py-4 px-6 font-medium text-white whitespace-nowrap">
                Microsoft Surface Pro
              </th>
              <td class="py-4 px-6">White</td>
              <td class="py-4 px-6">Laptop PC</td>
              <td class="py-4 px-6">$1999</td>
              <td class="py-4 px-6 text-right">
                <a href="#" class="font-medium text-blue-500 hover:underline">Edit</a>
              </td>
            </tr>
            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
              <th scope="row" class="py-4 px-6 font-medium text-white whitespace-nowrap">
                Magic Mouse 2
              </th>
              <td class="py-4 px-6">Black</td>
              <td class="py-4 px-6">Accessories</td>
              <td class="py-4 px-6">$99</td>
              <td class="py-4 px-6 text-right">
                <a href="#" class="font-medium text-blue-500 hover:underline">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <?php require_once('../../view/header/htmlEnd.php'); ?>