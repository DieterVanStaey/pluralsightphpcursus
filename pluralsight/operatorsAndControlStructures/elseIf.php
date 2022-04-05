<?php

$authors = ["Dieter Van Staey", "Samuel Van Steay", "Maartje Smeyers"];
$authors = [];
$authors = ["De Andere Auteur"];
$count = count($authors);

if ($count > 1) {
    print_r($authors);
}
else if ($count === 0)
{
    echo "Er zijn geen auteurs";
}
else
{
    echo "Het is nog iets anders";
}