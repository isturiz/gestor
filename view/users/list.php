<?php require_once('../../view/header/htmlStart.php'); ?>


<?php require_once('../../view/header/header.php'); ?>

<div class="h-screen w-full flex flex-row">

  <?php require_once('../../view/header/aside.php'); ?>

  <!-- ========== MAIN ========== -->
  <div class="flex-grow bg-gray-700">
    <main class="container">
      <div class="overflow-x-auto  relative w-full p-8 ">
        <table class="w-full text-sm text-left text-gray-400">
          <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
              <th scope="col" class="py-3 px-6">Cedula</th>
              <th scope="col" class="py-3 px-6">Nombre</th>
              <th scope="col" class="py-3 px-6">Apellido</th>
              <th scope="col" class="py-3 px-6">Telefono</th>
              <th scope="col" class="py-3 px-6">Correo</th>
              <th scope="col" class="py-3 px-6 text-right">Acción</th>
            </tr>
          </thead>
          <tbody>

            <?php
            require_once '../../controller/users/list.php';
            while ($row = mysqli_fetch_assoc($files)) {
            ?>

              <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-white whitespace-nowrap">
                  <?php echo $row['cedula']; ?>
                </th>
                <td class="py-4 px-6"> <?php echo $row['nombre']; ?> </td>
                <td class="py-4 px-6"><?php echo $row['apellido']; ?></td>
                <td class="py-4 px-6"><?php echo $row['telefono']; ?></td>
                <td class="py-4 px-6"><?php echo $row['correo']; ?></td>
                <td class="py-4 px-6 text-right">
                  <a href="../../view/users/edit.php?identificationCard=<?php echo $row['cedula'] ?>" class="font-medium text-green-500 hover:underline">editar</a></td>
                <td>
                  <a href="../../controller/users/delete.php?identificationCard=<?php echo $row['cedula'] ?>" class="font-medium text-blue-500 hover:underline">eliminar</a>
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