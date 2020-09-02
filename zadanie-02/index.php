<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>


	<div class="row">

        <?php
            $item_count = 5;
            $item_price = 350;
            echo $item_count;
            echo '<br>';
            echo $item_price;
            echo '<br>=<br>';
            $item_sum = $item_count * $item_price;
            echo $item_sum;

            $numOne = 1;
            $numTwo = 2;
            $numThree = 3;
            $numSum = $numOne + $numTwo + $numThree;
            echo '<br><br>';
            echo $numOne.'+'.$numTwo.'+'.$numThree.'=';
            echo $numSum;
        ?>

	</div>



</body>
</html>