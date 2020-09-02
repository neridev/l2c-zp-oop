<!DOCTYPE html>
<html>

<?php
	include('head.php');
?>

<body>

<?php
	include('header.php');
	include('menu.php');
?>

	<main>
		<article>
			<header class="post-header">
				<div class="container">
					<h1 class="post-title">Portfólio našich prác</h1>
				</div>
			</header>
			<div class="post-content">
				<div class="container">

					<h2 class="text-center">Toto je veta, ktorá je tu napísaná, ktorá má hovoriť o tom, ako veľmi sme šikovní sme v našom portfóliovaní a tvorbe vecí, ktoré tvoríme a taktiež vyrábame.</h2>

					<?php echo $menu_web ?>

				</div>

				<section class="gallery">
					<div class="gallery-set container" id="web">
						<a href="img/morty/image-1.jpg">
							<img src="img/morty/thumb-1.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-2.jpg">
							<img src="img/morty/thumb-2.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-3.jpg">
							<img src="img/morty/thumb-3.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-4.jpg">
							<img src="img/morty/thumb-4.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-5.jpg">
							<img src="img/morty/thumb-5.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-6.jpg">
							<img src="img/morty/thumb-6.jpg" height="192" width="383" alt="rick and morty">
						</a>
						<a href="img/morty/image-7.jpg">
							<img src="img/morty/thumb-7.jpg" height="192" width="383" alt="rick and morty">
						</a>
					</div>
				</section>
			</div>
		</article>
	</main>

<?php
	include('footer.php');
?>

</body>
</html>