<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hi = new Hello();
echo $hi->talk() . PHP_EOL;

echo SayHello::world() . PHP_EOL;


