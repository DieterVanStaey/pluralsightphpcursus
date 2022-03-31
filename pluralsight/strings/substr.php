<?php

$zin = "Het schreeuwarsenaal achter Bunuel en Oxbow.\n";
echo $zin;

echo substr($zin, 6);

echo substr($zin, 11, 13)."\n"; // beginnen op 11, 13 karakters ver

echo substr($zin, 12, 130);

echo substr($zin, -10); // beginnen op 10 van het einde

echo substr($zin, 12, -6); // beginnen op 12 eindigen op 6 vanaf het einde

?>
