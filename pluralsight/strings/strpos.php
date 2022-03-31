<?php

$zin = "Hele mooie zinnen verzin ik steeds weer voor die php-oefeningen";

$positie = strpos($zin, "zin");
echo "$positie\n";

$positie = strpos($zin, "zin", 12);
echo "$positie\n";

// strpos = case sensitive
$positie = strpos($zin, "h");
echo $positie;

?>