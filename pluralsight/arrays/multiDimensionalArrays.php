<?php
$auteurs =[
    "Male"=>[
        "Dieter"=>["Paddos", "Echtscheidingen"],
        "Jan"=>["Chillipepers", "Metal", "Fruit"]
    ],
    "Female"=>[
        "Maartje"=>["Hoogebegaafde kids", "Vlijmscherpe humor"],
        "Ingrid"=>["Jodendom", "Autisme"]
    ]
];

print_r($auteurs);

echo $auteurs['Male']['Dieter'][1]."\n";

print_r($auteurs['Female']);