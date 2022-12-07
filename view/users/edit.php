<?php require_once('../../view/header/htmlStart.php'); ?>


<?php require_once('../../view/header/header.php'); ?>

<div class="h-screen w-full flex flex-row">

  <?php require_once('../../view/header/aside.php'); ?>

  <!-- ========== MAIN ========== -->
  <div class="flex-grow bg-gray-700">
    <main class="container">
      <div class="overflow-x-auto  relative w-full p-8 ">

        <!-- ===== user registration ===== -->
        <!--, idNivelUsuario -->
        <?php require_once '../../controller/users/edit.php'; ?>


        <form action="../../controller/users/edit.php" method="POST">
          <div class="relative z-0 mb-6 w-full group">
            <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-600 appearance-none focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required="" value="<?php echo $email; ?>">
            <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo electrónico</label>
          </div>
          <div class="relative z-0 mb-6 w-full group">
            <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required="" value="admin">
            <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contraseña</label>
          </div>

          <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
              <input type="text" name="firstName" id="firstName" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required="" value="<?php echo $firstName; ?>">
              <label for="firstName" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
              <input type="text" name="lastName" id="lastName" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required="" value="<?php echo $lastName; ?>">
              <label for="lastName" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellido</label>
            </div>
          </div>

          <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
              <input type="text" name="identificationCard" id="identificationCard" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required="" value="<?php echo $identificationCard; ?>">
              <label for="identificationCard" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cédula</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
              <input type="text" name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required="" value="<?php echo $phone; ?>">
              <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número de teléfono</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
              <input type="text" name="userLevel" id="userLevel" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none text-white border-gray-600 focus:border-blue-500 focus:outline-none focus:ring-0 peer" placeholder=" " required="" value="<?php echo $userLevel; ?>">
              <label for="userLevel" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nivel de usuario</label>
            </div>
          </div>
          <button type="submit" name="edit" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Editar</button>
        </form>

      </div>
    </main>
  </div>

  <?php require_once('../../view/header/htmlEnd.php'); ?>