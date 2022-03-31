<?php

// zoeken en vervangen van delen van een string
$zin = "There are things known and there are things unknown, and in between are the doors of perception\n ";
echo $zin;

$replacedZin = str_replace("doors", "wheels", $zin);
echo $replacedZin;

$replacedZin = str_replace("are", "will be", $replacedZin);
echo $replacedZin;

// tellen hoeveel keer str_replace is uitgevoerd in de string, uitgevoerd by reference
$replacedZin = str_replace("are", "were", $zin, $count);
echo $replacedZin;
echo $count;
?>