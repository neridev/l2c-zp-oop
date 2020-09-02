<!DOCTYPE html>
<html>

<?php
	include 'head.php';
?>

<body class="gallery">

<?php
	include 'header.php';
	echo $gallery;
?>

	<main>
		<section class="content container">
			<h1 class="shadow">Sweet Gallery</h1>
			<h2 class="shadow">It's got images in it.</h2>

		 	<div class="image-grid group">
				<img src="img/01.png" class="gallery-img" alt="ms marvel">
				<img src="img/02.png" class="gallery-img" alt="ms marvel">
				<img src="img/03.png" class="gallery-img" alt="ms marvel">
				<img src="img/04.png" class="gallery-img" alt="ms marvel">
				<img src="img/05.png" class="gallery-img" alt="ms marvel">
				<img src="img/06.png" class="gallery-img" alt="ms marvel">
			</div>
		</section>
	</main>

<?php
	include 'footer.php';
?>
	
</body>
</html>