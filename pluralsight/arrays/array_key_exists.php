<?php
$auteurs = array("Dieter", "Gunter", "Lieve", "Lies");
$auteursAssociatief = array(
    "quarky" => "Jan",
    "brilliant" => "Penny",
    "poetic"=> "Wallie"
);

echo $auteurs[1]."\n";

echo $auteursAssociatief['poetic'];

echo array_key_exists(5, $auteurs);
echo array_key_exists(2, $auteurs);

echo array_key_exists('quarky', $auteursAssociatief);