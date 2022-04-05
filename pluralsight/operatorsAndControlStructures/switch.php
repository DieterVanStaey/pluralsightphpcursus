<?php
$keuze = "d";
kiezer($keuze);

$keuze = "b";
kiezer($keuze);

function kiezer($keuzeMeegegeven)
{
    switch($keuzeMeegegeven)
    {
        case "a":
            echo "De keuze is a".PHP_EOL;
            break;
        case "b":
            echo "De keuze is b".PHP_EOL;
            break;
        case "c":
            echo "De keuze is c".PHP_EOL;
            break;
        case "d":
            echo "De keuze is d".PHP_EOL;
            break;
        default:
            echo "De keuze is verkeerd".PHP_EOL;
            break;
    }
}

echo (5 <=> 4);