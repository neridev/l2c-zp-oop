<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">	
	
	
</head>
<body class="container">


	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php 

		$data = [
			[
				"title" => "The World's End",
				"genre" => "Sci-fi",
				"year"  => 2013,
				"gross" => 26004851
			],
			[
				"title" => "Scott Pilgrim vs. the World",
				"genre" => "Sadness",
				"year"  => 2010,
				"gross" => 31524275
			],
			[
				"title" => "Hot Fuzz",
				"genre" => "Buddy Cop",
				"year"  => 2007,
				"gross" => 23637265
			],
			[
				"title" => "Shaun of the Dead",
				"genre" => "Zombie",
				"year"  => 2007,
				"gross" => 13542874
			],
			[
				"title" => "Test 5",
				"genre" => "5555",
				"year"  => 2020,
				"gross" => 9123456
			],
		];
		?>

<table>
		 	<thead>
				<tr>
			 		<th>Title</th>
					<th>Genre</th>
					<th>Year</th>
					<th>Gross</th>
			 	</tr>
		 	</thead>

			<?php
				$count = 0;
			 ?>
			<?php foreach ( $data as $key => $item ) : ?>

				<?php if ($key % 2 == 0): ?>

					<tr>
						<td class="odd"><?php echo $item["title"] ?></td>
						<td class="odd"><?php echo $item["genre"] ?></td>
						<td class="odd"><?php echo $item["year"] ?></td>
						<td class="odd"><?= '$ '.number_format($item["gross"]) ?></td>
					</tr>

				<?php else: ?>

					<tr>
						<td><?php echo $item["title"] ?></td>
						<td><?php echo $item["genre"] ?></td>
						<td><?php echo $item["year"] ?></td>
						<td><?= '$ '.number_format($item["gross"]) ?></td>
					</tr>
				<?php endif; ?>

				<?php $count = $count + $item["gross"]?>

	 		<?php endforeach ?>

			<tfoot>
				<tr class="count">
					<td></td>
					<td></td>
					<td></td>
					<td><?= '$ '.number_format($count) ?></td>
				</tr>
			</tfoot>
		 </table>


		

	</div>
	
</body>
</html>