<?php
$auteurs = ["Dieter", "Ingrid", "Maartje", "Oliver"];

unset($auteurs[1], $auteurs[3]);

print_r($auteurs);