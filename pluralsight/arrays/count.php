<?php
$auteurs =[["Willy", "Wally", "Wendy", "Wanda", "Wannes"], ["Danny", "Dirk", "Daniëlla"]];

echo count($auteurs)."\n"; // telt enkel da arrays in de array

echo count($auteurs, 1)."\n";
// of
echo count($auteurs, COUNT_RECURSIVE);