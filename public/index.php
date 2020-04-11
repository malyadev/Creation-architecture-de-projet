<?php

require '../vendor/autoload.php';

use App\Wcs;
use HelloWorld\SayHello;

$hello = new \App\Wcs\Hello();
echo $hello->talk();

echo '<br>';

$hi = new SayHello();
echo $hi->world();

