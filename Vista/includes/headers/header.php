<header>
  <nav class="bg-gray-800 border-gray-200 px-4 lg:px-6 py-2.5">
    <div class="flex flex-initial justify-between items-center mx-auto max-w-screen-xl">
      <a href="https://flowbite.com" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white">SGT</span>
      </a>

      <!-- buscador -->
      <div class="">
        <input type="search" class="px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Buscar archivo" />
      </div>

      <!-- user menu -->
      <div class="">
        <div class="flex items-center md:order-2">
          <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 rounded-full" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/null/external-user-user-tanah-basah-glyph-tanah-basah-4.png" alt="user photo" />
          </button>
          <!-- Dropdown menu -->
          <div class="hidden z-50 my-4 text-base list-none bg-gray-700 rounded divide-y divide-gray-600 shadow" id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="
                  position: absolute;
                  inset: 0px auto auto 0px;
                  margin: 0px;
                  transform: translate3d(0px, 10.4px, 0px);
                ">
            <div class="py-3 px-4">
              <span class="block text-sm text-white">Bonnie Green</span>
              <span class="block text-sm font-medium text-gray-400 truncate">name@flowbite.com</span>
            </div>
            <ul class="py-1" aria-labelledby="user-menu-button">
              <li>
                <a href="#" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white">Dashboard</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white">Settings</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white">Earnings</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white">Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>