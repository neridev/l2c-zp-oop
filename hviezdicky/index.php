<?php

$rows = 5;

for ( $i = 1; $i <= $rows; $i++ ) {
    $tmp = '';
    for ( $j = 1; $j <= $i; $j++ ) {
        $tmp .= ' * ';
    }
    echo "$tmp<br>";
}

echo "<br>";

for ( $i = 1; $i <= $rows; $i++ ) {
    $tmp = '';
    for ( $j = $rows; $j >= $i; $j-- ) {
        $tmp .= ' * ';
    }
    echo "$tmp<br>";
}

?>