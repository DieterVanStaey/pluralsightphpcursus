<?php

define('CHECK_CONSTANT', "Yes, I'm a constant");

$intVar = 1234;
$stringVar = "I'm a string";
$boolVar = false;
$floatVar = 1.234;

// checken of iets een integer is met de functie is-int()
echo is_int($intVar);
// geen output als het geen integer is
echo is_int($stringVar);

echo "\n".is_string($stringVar);

echo "\n".is_bool($boolVar);

echo "\n".is_float($floatVar);

// checken of constante gedifinieerd is, geeft geen output indien niet, 1 als wel
echo "\n".defined('CHECK_CONSTANT');

echo "\n".defined('CONSTANT');

?>