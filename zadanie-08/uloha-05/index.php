<?php

require('header.php');

    if ( isset($_GET['product']) )
    {
        $product = $_GET['product'];
    }
    else
    {
        $product = 'bránky';
    }

    echo '<h1>'.ucfirst(str_replace('-', ' ', $product)).'</h1>';

    $image = glob( 'produkty/'.$product.'/images/*' );
    $thumbs = glob( 'produkty/'.$product.'/thumbs/*' );

    for ( $i = 0; $i < count($image); $i++) {
        echo '<a href="'.$image[$i].'"><img src="'.$thumbs[$i].'" alt=""></a>';
    }

require('footer.php');

?>
