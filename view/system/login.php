<section class="h-screen bg-gray-700">
  <div class="px-6 h-full text-gray-800">
    <div class="flex xl:justify-center justify-center items-center flex-wrap h-full g-6">
      <div class="xl:w-5/12 lg:w-5/12 flex justify-center flex-col">

        <div>

          <h1 class="mb-4 text-4xl font-extrabold leading-none md:text-5xl lg:text-6xl text-gray-100 flex justify-center tracking-wide">SGT</h1>
          <p class="mb-6 text-lg font-normallg:text-xl sm:px-16 xl:px-48 text-gray-200 flex justify-center"">¡Bienvenido!</p>
        
        </div>

        <form action=" controller/system/login.php" method="POST">

            <!-- Email input -->
          <div class="mb-6">
            <input type="text" name="cedula" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Cédula" />
          </div>

          <!-- Password input -->
          <div class="mb-6">
            <input type="password" name="clave" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Contraseña" />
          </div>

          <div class="text-center">
            <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
              Iniciar sesión
            </button>

          </div>

          </form>

        </div>
      </div>
    </div>
</section>