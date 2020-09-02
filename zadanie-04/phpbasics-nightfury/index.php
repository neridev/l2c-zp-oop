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

					<?php echo $menu_all ?>

				</div>

				<section class="gallery">
					<div class="gallery-set container" id="vsetko">
						<a href="img/samurai/image-1.jpg">
							<img src="img/samurai/thumb-1.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-2.jpg">
							<img src="img/samurai/thumb-2.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-3.jpg">
							<img src="img/samurai/thumb-3.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-4.jpg">
							<img src="img/samurai/thumb-4.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-5.jpg">
							<img src="img/samurai/thumb-5.jpg" height="192" width="383" alt="jackie boy">
						</a>
						<a href="img/samurai/image-6.jpg">
							<img src="img/samurai/thumb-6.jpg" height="192" width="383" alt="jackie boy">
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