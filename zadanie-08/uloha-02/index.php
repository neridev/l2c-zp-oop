<?php

$pocet = 11;
$string = '';

for ( $i = 1; $i <= $pocet; $i++ ) {
    $string .= $i.'-';
}

//echo $string;
$update_string = substr($string, 0, -1);
echo $update_string;

?>