<?php require_once('../../view/header/htmlStart.php'); ?>


<?php require_once('../../view/header/header.php'); ?>

<div class="h-screen w-full flex flex-row">

  <?php require_once('../../view/header/aside.php'); ?>

  <!-- ========== MAIN ========== -->
  <div class="flex-grow bg-gray-700">
    <main class="container">
      <div class="overflow-x-auto  relative w-full p-8">

        <!-- FILTER AND SEARCH -->
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
              <input type="text" id="table-search" onkeyup="doSearch()" class="textToSearch block p-2 pl-10 w-80 text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Buscar">
            </div>

            <div>
              <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center border focus:outline-none focus:ring-4 font-medium rounded-lg text-sm px-3 py-1.5  bg-gray-800  text-white  border-gray-600  hover:bg-gray-700  hover:border-gray-600  focus:ring-gray-700" type="button">
                <svg class="mr-2 w-4 h-4 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                </svg>
                Últimos 30 días
                <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div id="dropdownRadio" class="hidden z-10 w-48 rounded divide-y shadow  bg-gray-700  divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                <ul class="p-3 space-y-1 text-sm text-gray-200" aria-labelledby="dropdownRadioButton">
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-600">
                      <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600  ring-offset-gray-800 focus:ring-2  bg-gray-700  border-gray-600">
                      <label for="filter-radio-example-1" class="ml-2 w-full text-sm font-medium rounded  text-gray-300">Últimos 7 días</label>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-600">
                      <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 focus:ring-blue-600  ring-offset-gray-800 focus:ring-2  bg-gray-700  border-gray-600">
                      <label for="filter-radio-example-2" class="ml-2 w-full text-sm font-medium rounded  text-gray-300">Últimos 30 días</label>
                    </div>
                  </li>

                </ul>
              </div>
            </div>


          </div>

          <div class="flex justify-between items-center">

            <button type="button" data-modal-toggle="uploadModal" class="text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-1.5 bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-green-800">Subir archivo</button>

          </div>

        </div>

        <div class="flex p-4 mb-4 rounded-lg bg-blue-200 hidden changeAlert" id="alertFiles" role="alert">
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5  text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Info</span>
          <div class="ml-3 text-sm font-medium text-blue-800">
            Los cambios se han guardado correctamente
          </div>
          <button type="button" class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5  inline-flex h-8 w-8 bg-blue-200 text-blue-600 hover:bg-blue-300" data-dismiss-target="#alertFiles" aria-label="Close" onclick="noShowAlert()">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>

        <table class="w-full text-sm text-left text-gray-400" id="table-file">
          <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
              <th scope="col" class="py-3 px-6">Nombre</th>
              <th scope="col" class="py-3 px-6">Formato</th>
              <th scope="col" class="py-3 px-6">Categoría</th>
              <th scope="col" class="py-3 px-6">Tamaño</th>
              <th scope="col" class="py-3 px-6">Subido por</th>
              <th scope="col" class="py-3 px-6 text-center">Acción</th>
            </tr>
          </thead>
          <tbody>

            <?php
            require_once '../../controller/files/list.php';
            while ($row = mysqli_fetch_assoc($files)) {
            ?>

              <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-white whitespace-nowrap">
                  <?php echo $row['nombre']; ?>
                </th>
                <td class="py-4 px-6"> <?php echo $row['formato']; ?> </td>
                <td class="py-4 px-6"><?php echo $row['idCategoria']; ?></td>
                <td class="py-4 px-6">
                  <?php

                  $pesoFloat = floatval($row['peso']);

                  if ($pesoFloat <= 1000000) {
                    echo floor($pesoFloat / 1000) . ' KB';
                  } else {
                    echo floor($pesoFloat / 1000000) . ' MB';
                  }

                  ?>

                </td>
                <td class="py-4 px-6 "><?php echo $row['cedulaUsuario']; ?></td>

                <td class="py-4 px-6 text-right flex justify-between">
                  <!-- DESCARGAR ARCHIVOS -->
                  <a href="<?php echo $row['ruta']; ?>" download="<?php echo $row['nombre'] . "." . $row['formato'] ?>" class="text-white-500 ">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                    </svg>
                  </a>

                  <button class="text-red-500" type="button" data-modal-toggle="deleteAlert" onclick="deleteFile('<?php echo ($row['idArchivo']); ?>')">
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

        

        <?php require_once('../complementary/deleteAlert.php'); ?>
        <?php require_once('upload.php'); ?>


      </div>
    </main>
  </div>

  <script src="../../js/search.js"></script>
  <script src="../../js/deleteAlert.js"></script>


  <?php require_once('../../view/header/htmlEnd.php'); ?>