<header class="">
  <nav class="bg-gray-800 border-gray-200 px-4 py-2.5">
    <div class="flex flex-initial justify-between items-center mx-auto max-w-screen-xl">
      <a href="/gestor/view/files/list.php  " class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white">SGT</span>
      </a>
      <!-- User menu -->
      <div class="">
        <div class="flex items-center md:order-2">
          <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Abrir menu de usuario</span>
            <img class="w-8 h-8 rounded-full" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/FFFFFF/external-user-user-tanah-basah-glyph-tanah-basah-5.png" alt="user photo" />
          </button>
          <!-- Dropdown menu -->
          <div class="hidden z-50 my-4 text-base list-none bg-gray-700 rounded divide-y divide-gray-600 shadow" id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="
                  position: absolute;
                  inset: 0px auto auto 0px;
                  margin: 0px;
                  transform: translate3d(0px, 10.4px, 0px);
                ">
            <div class="py-3 px-4">
              <span class="block text-sm text-white">
                <?php
                session_start();
                echo $_SESSION['cedula'];
                ?>
              </span>
              <span class="block text-sm font-medium text-gray-400 truncate">email@domain</span>
            </div>
            <ul class="py-1" aria-labelledby="user-menu-button">
              <li>
                <a href="../../controller/system/exit.php" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white">Cerrar sesión</a>
              </li>
            </ul>
          </div>
          <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Abrir menú</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>
</header>