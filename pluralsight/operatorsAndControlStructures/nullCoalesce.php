<?php

$count = null;

// outcome is gelijk aan count als count bestaat, als count niet bestaat krijg je de boodschap
// chainable
$outcome = $count  ??  "Er is geen getal".PHP_EOL;

echo $outcome;

$count = 1;

$outcome = $count  ??  "Er is geen getal".PHP_EOL;

echo $outcome;