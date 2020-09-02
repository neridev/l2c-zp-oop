<?php

/*
require 'src/Dog.php';
require 'src/Coyote.php';
*/

require 'vendor/autoload.php';

use TestNamespace\Dog;
use TestNamespace\Coyote;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

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

?>