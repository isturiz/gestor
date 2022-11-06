<?php require_once('../../view/header/htmlStart.php'); ?>


<?php require_once('../../view/header/header.php'); ?>

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

              <?php
              require_once '../../controller/files/fileList.php';
              while($row = mysqli_fetch_assoc($files))
              {
              ?>

            <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
              <th scope="row" class="py-4 px-6 font-medium text-white whitespace-nowrap">
                <?php echo $row['nombre'];?>
              </th>
              <td class="py-4 px-6"> <?php echo $row['formato'];?> </td>
              <td class="py-4 px-6"></td>
              <td class="py-4 px-6"><?php echo $row['peso'];?></td>
              <td class="py-4 px-6 text-right">
                <a href="#" class="font-medium text-blue-500 hover:underline">Edit</a>
              </td>
            </tr>
            <?php
              }
              ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <?php require_once('../../view/header/htmlEnd.php'); ?>