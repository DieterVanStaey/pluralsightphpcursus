<?php

$authors = ["Dieter Van Staey", "Samuel Van Steay", "Maartje Smeyers"];
// $authors = [];
$count = count($authors);

if ($count > 1)
{
    print_r($authors);
}
else
{
    echo "Er zijn te weinig auteurs";
}