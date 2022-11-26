<?php require_once('../../view/header/htmlStart.php'); ?>


<?php require_once('../../view/header/header.php'); ?>

<div class="h-screen w-full flex flex-row">

	<?php require_once('../../view/header/aside.php'); ?>

	<!-- ========== MAIN ========== -->
	<div class="flex-grow bg-gray-700">
		<main class="container">
			<div class="overflow-x-auto relative w-full p-8 ">
				<div class="flex justify-center items-center w-full pb-8">
					<label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-700 rounded-lg ">
						<div class="flex flex-col justify-center items-center pt-5 pb-6">
							<form action="../../controller/files/upload.php" method="POST" enctype="multipart/form-data">
								<input type="file" name="file">
								<button type="submit">Subir</button>
							</form>
						</div>
					</label>
				</div>
			</div>
		</main>
	</div>

	<?php require_once('../../view/header/htmlEnd.php'); ?>