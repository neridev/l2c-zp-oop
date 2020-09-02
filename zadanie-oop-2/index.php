<?php

/*
require 'src/User.php';
require 'src/Admin.php';
*/

require 'vendor/autoload.php';

use Testing\User;
use Testing\Admin;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$userko = new User("First Userko", "Last UserName", "userko@username.com", "https://picsum.photos/120");
$userko->displayName();
$userko->setFirstName('FTest');
$userko->setLastName('FLast');
$userko->firstName();
$userko->lastName();
$userko->displayName();
$userko->email();
$userko->avatar();

$adminko = new Admin("First Adminko", "Last AdminName", "adminko@adminname.com", "https://picsum.photos/150");
$adminko->displayName();
$adminko->destroyEverything();
$adminko->email();
$adminko->avatar();
