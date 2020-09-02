<?php

include_once '_inc/header.php';


$json = file_get_contents('albums.json');
$json = json_decode($json);

/*
echo('<pre>');
print_r($json);
echo('</pre>');
*/


echo '<ul>';

foreach ( $json->items as $album )
{
	$name = $album->name;
	$url  = $album->external_urls->spotify;
	$image = $album->images[0]->url;

	
	echo '<li><a href="'. $url .'"><img src="'. $image .'">Nazov albumu: '. $name .'</a></li>';
}

echo '</ul>';

include_once '_inc/footer.php';