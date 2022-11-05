<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gestor</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>


<body>

  <?/*php require_once(''); */ ?>

  <?php require_once('./view/header/header.php'); ?>


  <div class="h-screen w-full flex flex-row">

    <?php require_once('./view/header/aside.php'); ?>

    <!-- ========== MAIN ========== -->
    <div class="flex-grow bg-gray-700">
      <main class="container">
        <div class="overflow-x-auto relative w-full p-8">
          <?php require_once('./view/gestor/fileList.php'); ?>
        </div>
      </main>
    </div>


</body>

<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</html>