<?php

include_once '_inc/header.php';


// toto najde vsetky albumy vasa patejdla na spotify
// ma tam ID: 0CbbftseLRwYyUdmOXvH6l
// staci zmenit to ID v adrese a ID ineho interpreta a vypise to jeho albumy

//$json = file_get_contents('https://api.spotify.com/v1/artists/0CbbftseLRwYyUdmOXvH6l/albums');
$json = file_get_contents('https://itunes.apple.com/search?term=vaso+patejdl&entity=album');
$json = json_decode($json);

/*
echo('<pre>');
print_r($json);
echo('</pre>');
*/

// pravda je, ze spotify sa medzitym zmenilo a toto uz nefunguje
// ale nechavam ten kod tu pre inspiraciu
// tvoja uloha bude
foreach ( $json->results as $album )
{
	$name = $album->collectionName;
	$url  = $album->artistViewUrl;
	$image = $album->artworkUrl100;

	echo '<p>';
	echo '	<a href="'. $url .'"><img src="'. $image .'"></a>';
	echo '	<a href="'. $url .'">Vaso Patejdl - '. $name .'</a>';
	echo '</p>';
}


include_once '_inc/footer.php';