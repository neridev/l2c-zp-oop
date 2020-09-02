<?php

/*
require 'src/Dog.php';
require 'src/Coyote.php';
*/

require 'vendor/autoload.php';

use TestNamespace\Dog;
use TestNamespace\Coyote;

use UserNamespace\User;
use UserNamespace\Math;


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

echo "Sum: 1+2+3+20 je " . Math::sum(1,2,3,20);
echo "<br>";
echo "Avg: 1+2+3+20 / 4 je " . Math::avg(1,2,3,20);
echo "<br><br>";

$dunco = new Dog("Dunco", 10, 5);
$dunco->bark();
echo $dunco->getEat();
echo "<br><br>";
echo $dunco->name;
echo "<br><br>";

$courage = new Dog("Courage", 20, 5);
$courage->bark();

$danger = new Coyote("Kojot", 50, 5);
$danger->bark();

$dunco->setEat(0);
$courage->setEat(-100);
$danger->setEat(25);

echo "======<br><br>";

$userko = new User("First Userko", "Last UserName", "userko@username.com", "https://picsum.photos/120");
$userko->firstName();
$userko->lastName();
$userko->displayName();
$userko->setFirstName('Set-FFirst');
$userko->setLastName('Set-FLast');
$userko->firstName();
$userko->lastName();
$userko->displayName();
$userko->email();
$userko->avatar();

?>