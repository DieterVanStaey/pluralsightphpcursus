<?php
$auteurs = ["Dieter", "Maartje"];

print_r($auteurs);

array_push($auteurs, "Mien");

$auteurs[] = "Willem"; // preferred

print_r($auteurs);