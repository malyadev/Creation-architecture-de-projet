<?php
require '../src/Wcs/Hello.php';

$hello = new \App\Wcs\Hello();
echo $hello->talk();

var_dump($hello);