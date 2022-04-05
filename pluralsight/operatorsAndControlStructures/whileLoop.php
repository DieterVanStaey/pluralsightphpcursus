<?php

$reading = true;
$number = 0;

while($reading)
{
    echo $number.PHP_EOL;
    $number++;
    $number === 10 ?  $reading = false : $reading = true;
}