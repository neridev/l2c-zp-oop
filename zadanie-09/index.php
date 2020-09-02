<?php

###
# zadanie A
echo '<strong>zadanie A</strong>: ';
function pozdrav() {
    echo ('Ahoj, trulo');
}
pozdrav();
echo '<br>';


###
# zadanie B
echo '<strong>zadanie B</strong>: ';
$tmpB = [
    [
        "title" => "The World's End",
        "genre" => "Sci-fi",
        "year"  => 2013,
        "gross" => 26004851
    ],
    [
        "title" => "Scott Pilgrim vs. the World",
        "genre" => "Sadness",
        "year"  => 2010,
        "gross" => 31524275
    ],
];

function pre_r($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

pre_r($tmpB);


###
# zadanie C
echo '<strong>zadanie C</strong>: ';
$tmpC = [ 'web', 'gule', 'vajcia' ];

function create_link($data) {
    foreach ( $data as $item ) {
        echo '<a href="'.$item.'.php?page='.strtoupper($item).'">'.ucfirst($item).'</a>';
        echo ' ';
    }
}

create_link($tmpC);
echo '<br>';


###
# zadanie D
echo '<strong>zadanie D</strong>: ';
$pocet_produktov = 5;
$cena_jedneho = 300;

function how_much($count, $price) {
    $sum = $count * $price;
    return $sum;
}

echo '<p> Kupil si '.$pocet_produktov.' predmetov za '.how_much( $pocet_produktov, $cena_jedneho ).'€ dokopy.</p>';


###
# zadanie E
echo '<strong>zadanie E</strong>: ';
$number1 = 3;
$number2 = 2;

function what_is_greater( $x, $y) {
    if ( $x > $y ) {
        echo 'Vacsie cislo je: '.$x;
    } elseif ( $y > $x ) {
        echo 'Vacsie cislo je: '.$y;
    } else {
        echo 'Cisla su rovne';
    }
}

echo 'Mam cisla: '.$number1.' a '.$number2.'.';
echo '<br>';
what_is_greater ( $number1, $number2 );
echo '<br><br>';


###
# zadanie F
echo '<strong>zadanie F</strong>: ';
$tmpE = [1,2,300];

function countArray( $array ) {
    $sum = 0;

    for( $i=0; $i < count($array); $i++ ) {
        $sum = $sum + $array[$i];
    }

    return $sum;
}

echo 'Sucet pola je: '.countArray($tmpE);
echo '<br>';

###
# zadanie G
echo '<strong>zadanie G</strong>: ';
$tmpG = [1,20,3,44,5,19,7,83,99,121];

function everySecondItem( $array ) {
    echo 'Kazde druhe cislo z pola: ';

    for( $i = 0; $i < count($array); $i++ ) {
        if (!($i%2 == 0)) {
            echo $array[$i].' ';
        }
    }
}

everySecondItem($tmpG);
echo '<br>';


###
# zadanie H
echo '<strong>zadanie H</strong>: ';
$tmpH = [1,20,3,4403,5,16,7,830,99,121];

function maxArrayItem( $array ) {
    $max = 0;

    for ( $i = 0; $i < count($array); $i++ ) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }

    return $max;
}

echo 'Najvacsie cislo z pola: '. maxArrayItem($tmpH);
echo '<br>';


###
# zadanie I
echo '<strong>zadanie I</strong>: ';
$number3 = 15321.35;
$number4 = 2815321.35;

function money( $num ) {
    $num = number_format($num, 2, ',', ' ').'€';
    return $num;
}

echo money($number3);
echo ' / ';
echo money($number4);
echo '<br>';


###
# zadanie J
echo '<strong>zadanie J</strong>: ';
$suma = 124.12;
$zlava = 13; // tym myslim akoze 13% zlava

function discout( $price, $discount) {
    $new_price = $price - ($price * ($discount / 100));
    return $new_price;
}

$suma_formatted = money(discout( $suma, $zlava));
echo $suma_formatted;





?>



















