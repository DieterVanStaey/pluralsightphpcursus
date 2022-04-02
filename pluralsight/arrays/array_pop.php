<?php
$auteurs = ["Dieter", "Maartje", "Griet"];

array_pop($auteurs);

print_r($auteurs);

$lastValue = array_pop($auteurs);

echo $lastValue;