<?php

use Penis\Hero;
use Penis\Enemy;

require 'vendor/autoload.php';


$hero = new Hero('Marceline', 50, [
	'gold' => 120, 'potion' => 3, 'axe' => 1,
]);

echo $hero->getName() . ' (' . $hero->getHealth() . 'HP)';

// enemy attacks me
$hero->takeDamage(40);
$hero->takeDamage(5);
//$hero->takeDamage(4);
//$hero->takeDamage(7);


$enemies = [
	new Enemy('Ice King', 50, [	'gold' => 900, 'crown' => 1, 'gunther'  => 1 ]),
	new Enemy('The Lich', 9999, [ 'gold' => 999 ]),
];

$enemies[0]->takeDamage(30);
$enemies[0]->takeDamage(5);
$enemies[0]->takeDamage(50);


$enemies[1]->fly();