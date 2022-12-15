<?php require_once('../../view/header/htmlStart.php'); ?>


<?php require_once('../../view/header/header.php'); ?>

<div class="h-screen w-full flex flex-row">

  <?php require_once('../../view/header/aside.php'); ?>

  <!-- ========== MAIN ========== -->
  <div class="flex-grow bg-gray-700">
    <main class="container">
      <div class="overflow-x-auto  relative w-full p-8 ">

        <!-- SEARCH AND CREATE NEW USER -->
        <div class="flex justify-between items-center pb-4">

          <div class="flex justify-between items-center gap-2">

            <!-- Search -->
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="text" id="table-search" onkeyup="doSearch()" class="block p-2 pl-10 w-80 text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar">
            </div>
          </div>


          <button type="button" data-modal-toggle="newUser" class="text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-1.5 bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-blue-800">Nuevo usuario</button>


        </div>

        <table class="w-full text-sm text-left text-gray-400" id="table-file">
          <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
              <th scope="col" class="py-3 px-6">Cedula</th>
              <th scope="col" class="py-3 px-6">Nombre</th>
              <th scope="col" class="py-3 px-6">Apellido</th>
              <th scope="col" class="py-3 px-6">Telefono</th>
              <th scope="col" class="py-3 px-6">Correo</th>
              <th scope="col" class="py-3 px-6 text-center">Acción</th>
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
                <td class="py-4 px-6 text-right flex justify-between">

                  <!-- Edit nuevo: oficial -->
                  <button 
                    class="text-white-500 editButton" 
                    type="button" 
                    
                    data-modal-toggle="editUserModal" 

                    onclick="editUser(
                      '<?php echo ($row['cedula'])?>',
                      '<?php echo ($row['nombre'])?>',
                      '<?php echo ($row['apellido'])?>',
                      '<?php echo ($row['telefono'])?>',
                      '<?php echo ($row['correo'])?>',
                      '<?php echo ($row['contraseña'])?>',
                      '<?php echo ($row['idNivelUsuario'])?>'

                      )">

                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                  </button>

                  <button class="text-red-500" type="button" data-modal-toggle="deleteAlert" targetEl="" 
                  onclick="deleteUser('<?php echo ($row['cedula'])?>')">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                  </button>
                </td>
              </tr>
            <?php
            }
            ?>

            <tr class='noSearch hide'>
              <td colspan="5"></td>
            </tr>
          </tbody>
        </table>

        <?php require_once('edit.php'); ?>
        <?php require_once('new.php'); ?>
        <?php require_once('../complementary/deleteAlert.php'); ?>


      </div>
    </main>
  </div>
  <script src="../../js/search.js"></script>
  <script src="../../js/deleteAlert.js"></script>
  <script src="../../js/edit.js"></script>


  <?php require_once('../../view/header/htmlEnd.php'); ?>