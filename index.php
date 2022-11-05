<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>index2</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
    />
  </head>
  <body>
    <header class="">
      <nav class="bg-gray-800 border-gray-200 px-4 py-2.5">
        <div
          class="flex flex-initial justify-between items-center mx-auto max-w-screen-xl"
        >
          <a href="https://flowbite.com" class="flex items-center">
            <img
              src="https://flowbite.com/docs/images/logo.svg"
              class="mr-3 h-6 sm:h-9"
              alt="Flowbite Logo"
            />
            <span
              class="self-center text-xl font-semibold whitespace-nowrap text-white"
              >SGT</span
            >
          </a>

          <!-- buscador -->
          <div class="">
            <input
              type="search"
              class="px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="Buscar archivo"
            />
          </div>

          <div class="">
            <div class="flex items-center md:order-2">
              <button
                type="button"
                class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-600"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom"
              >
                <span class="sr-only">Open user menu</span>
                <img
                  class="w-8 h-8 rounded-full"
                  src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/null/external-user-user-tanah-basah-glyph-tanah-basah-4.png"
                  alt="user photo"
                />
              </button>
              <!-- Dropdown menu -->
              <div
                class="hidden z-50 my-4 text-base list-none bg-gray-700 rounded divide-y divide-gray-600 shadow"
                id="user-dropdown"
                data-popper-reference-hidden=""
                data-popper-escaped=""
                data-popper-placement="bottom"
                style="
                  position: absolute;
                  inset: 0px auto auto 0px;
                  margin: 0px;
                  transform: translate3d(0px, 10.4px, 0px);
                "
              >
                <div class="py-3 px-4">
                  <span class="block text-sm text-white">Bonnie Green</span>
                  <span
                    class="block text-sm font-medium text-gray-400 truncate"
                    >name@flowbite.com</span
                  >
                </div>
                <ul class="py-1" aria-labelledby="user-menu-button">
                  <li>
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white"
                      >Dashboard</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white"
                      >Settings</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white"
                      >Earnings</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block py-2 px-4 text-sm text-gray-200 hover:bg-gray-600 hover:text-white"
                      >Sign out</a
                    >
                  </li>
                </ul>
              </div>
              <button
                data-collapse-toggle="mobile-menu-2"
                type="button"
                class="inline-flex items-center p-2 ml-1 text-sm text-gray-400 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600"
                aria-controls="mobile-menu-2"
                aria-expanded="false"
              >
                <span class="sr-only">Open main menu</span>
                <svg
                  class="w-6 h-6"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- main -->
    <div class="h-screen w-full flex flex-row">

      <aside class="w-64">
        <div class="overflow-y-auto bg-gray-800 h-screen">
          
          <ul class="space-y-2">
            <li>
              <a
                href="#"
                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700"
              >
                <span class="ml-3">Home</span>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="flex items-center p-2 text-base font-normal rounded-lg text-white hover:bg-gray-700"
              >
                <span class="flex-1 ml-3 whitespace-nowrap">Files</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>      

      <div class="flex-grow bg-gray-700">
        <main class="container">
          <div class="overflow-x-auto relative w-full p-8">
            <table class="w-full text-sm text-left text-gray-400">
              <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                  <th scope="col" class="py-3 px-6">Product name</th>
                  <th scope="col" class="py-3 px-6">Color</th>
                  <th scope="col" class="py-3 px-6">Category</th>
                  <th scope="col" class="py-3 px-6">Price</th>
                  <th scope="col" class="py-3 px-6 text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                  <th
                    scope="row"
                    class="py-4 px-6 font-medium text-white whitespace-nowrap"
                  >
                    Apple MacBook Pro 17"
                  </th>
                  <td class="py-4 px-6">Sliver</td>
                  <td class="py-4 px-6">Laptop</td>
                  <td class="py-4 px-6">$2999</td>
                  <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-blue-500 hover:underline"
                      >Edit</a
                    >
                  </td>
                </tr>
                <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                  <th
                    scope="row"
                    class="py-4 px-6 font-medium text-white whitespace-nowrap"
                  >
                    Microsoft Surface Pro
                  </th>
                  <td class="py-4 px-6">White</td>
                  <td class="py-4 px-6">Laptop PC</td>
                  <td class="py-4 px-6">$1999</td>
                  <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-blue-500 hover:underline"
                      >Edit</a
                    >
                  </td>
                </tr>
                <tr class="border-b bg-gray-800 border-gray-700 hover:bg-gray-600">
                  <th
                    scope="row"
                    class="py-4 px-6 font-medium text-white whitespace-nowrap"
                  >
                    Magic Mouse 2
                  </th>
                  <td class="py-4 px-6">Black</td>
                  <td class="py-4 px-6">Accessories</td>
                  <td class="py-4 px-6">$99</td>
                  <td class="py-4 px-6 text-right">
                    <a href="#" class="font-medium text-blue-500 hover:underline"
                      >Edit</a
                    >
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    

    
  </body>

  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</html>
