<?php

$files = [];
$files = glob("images/*.{jpg,png,JPG,PNG}", GLOB_BRACE);

/*
echo '<pre>';
print_r($files);
echo '</pre>';
*/

echo '<ol>';
foreach ( $files as $image ) {
    $image = str_replace(['_','-','.jpg','.png'],' ', $image);
    $image = str_replace('images/','', $image);
    echo '<li>'.ucfirst($image).'</li>';
}
echo '</ol>';

echo '<br>';

echo '<ol>';
foreach ( $files as $image ) {
    $image = str_replace('images/','', $image);
    $title = ucfirst(str_replace(['_','-','.jpg','.png'],' ', $image));
    echo '<li>{ type: \' quiz\', title: \''.$title.'\', pic: \''.$image.'\' }</li>';
}
echo '</ol>';

?>