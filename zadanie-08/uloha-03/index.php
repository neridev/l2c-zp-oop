<?php

$pocet = 3;

echo '<ol>';

for ( $i = 1; $i <= $pocet; $i++ ) {
    echo '<li><a href="show.php?id='.$i.'" target="_blank">zaznam '.$i.'</a>,
              <a href="edit.php?id='.$i.'" target="_blank">edit</a>,
              <a href="delete.php?id='.$i.'" target="_blank">delete</a></li>';
}

echo '</ol>';
    
?>