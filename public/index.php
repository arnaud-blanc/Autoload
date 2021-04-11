<?php

require_once __DIR__ . "/../vendor/autoload.php";

$hi = new App\Wcs\Hello();
echo $hi->talk();
