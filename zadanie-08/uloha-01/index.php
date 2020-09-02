<?php

$pocet = 0;
$pocet = 5;

if ( $pocet <= 0) {
    
    echo 'Pocet LI je mensi alebo rovny nule... Cislo musi byt kladne.';

} else {
    
    echo '<ul>';

    for ( $i = 1; $i <= $pocet; $i++ ) {
        echo '<li>'.$i.'. hodnota</li>';
    }

    echo '</ul>';
    
}

?>