<?php
$auteurs = ["Dieter", "Maartje", "Samuel", "Fritz", "Manuella"];

$auteursAssociative = [
    "poetic" => "Liese",
    "brilliant" => "Rene",
    "quarky" => "Robert"
];

// indexen blijven bij de waardes, ideaal voor associative arrays
asort($auteurs);

print_r($auteurs);

sort($auteurs); // bij associative arrays worden de keynames, indexes


print_r($auteurs);

ksort($auteursAssociative); // sorteert op de keywoorden
print_r($auteursAssociative);
