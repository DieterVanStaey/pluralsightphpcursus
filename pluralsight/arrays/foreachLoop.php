<?php
$auteurs = ["Garry", "Greet", "Griet", "Gerda", "Gordon"];

foreach($auteurs as $item){
    echo $item."\n";
}

$auteursAssociative = [
    "meester" => "Wim",
    "juffrouw" => "Renilde",
    "kleuter" => "Michel"
];

foreach($auteursAssociative as $key => $item){
    echo "$key $item\n";
}