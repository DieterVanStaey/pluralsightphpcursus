<?php

$authorName = "Dieter Van Staey\n";

function setAuthorName()
{
    global $authorName; // globale variable aanspreken vanuit de functie
    $authorName = "Jakkie Jansens\n";
}

echo $authorName;
setAuthorName();
echo $authorName;

?>
