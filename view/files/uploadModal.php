<!-- Edit user modal -->
<div id="uploadModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
  <div class="relative w-full max-w-2xl h-full md:h-auto">

    <!-- Modal content -->
    <form action="../../controller/files/upload.php" method="POST" enctype="multipart/form-data" class="relative rounded-lg shadow bg-gray-700">
      <!-- Modal header -->
      <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900  text-white">
          Subir archivo
        </h3>
        <button type="button" class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white" data-modal-toggle="uploadModal">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>

      </div>
      <!-- Modal body -->
      <div class="p-6 space-y-6 text-white ">
        <input type="file" name="file">
      </div>
      <!-- Modal footer -->
      <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-600">
        <button type="submit" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-600 hover:bg-green-700 focus:ring-green-800">Subir</button>
      </div>
    </form>
  </div>
</div>