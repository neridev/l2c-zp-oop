<?php
###
# Zadanie A + B

$atts = [
	'title' => 'toto je link',
	'class' => 'red',
	'id' => 'first'
];

function anchor( $url, $text, $atts = false ) {
	if ( $atts ) {
		$content = '';

		foreach ( $atts as $key => $att ){
			$content .= ' '.$key.'="'.$att.'" ';
		}
		echo '<a href="'.$url.'" '.$content.' >'.$text.'</a>';

	} else {
		echo '<a href="'.$url.'">'.$text.'</a>';
	}

}

?>

<p>Ked chces googlit, pouzi tento kvalitny <?php anchor('http://bing.hu', 'vyhladavac', $atts)  ?></p>


<?php
###
# Zadanie C

echo '<ul>';

function redirect($url) {
	$base_url = 'http://localhost/zaklady-programovania-oop/zadanie-10/';

	if( (strrchr($url, "/")) !== false) {
		$url = substr(strrchr($url, "/"), 1);
	}


	if ($url === 'edit.php') {
		echo '<li><a href="'.$base_url.''.$url.'">URL</a></li>';
	} else if (strpos($url, '.php') === false) {
		echo '<li><a href="'.$base_url.''.$url.'.php">URL</a></li>';
	}

}

redirect('edit.php');
redirect('edit');
redirect('http://localhost/zaklady-programovania-oop/zadanie-10/edit.php');
redirect('http://localhost/zaklady-programovania-oop/zadanie-10/edit');

echo '</ul>';

?>


<?php
###
# Zadanie D
function my_date($date, $format = 'sk') {
	$day = date_create_from_format('m-d-Y', $date);

	switch ($format) {

		case 'us':
			echo date_format($day, 'l, F j, Y');
			break;

		case 'ja':
			echo date_format($day, 'n/j/y');
			break;

		default:
			echo date_format($day, 'd.m.Y');
			break;
	}

}

echo my_date('12-28-1982', 'ja');

?>
