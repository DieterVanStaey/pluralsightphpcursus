<?php

$authors = ["Dieter Van Staey", "Samuel Van Steay", "Maartje Smeyers"];
$count = count($authors);

for($teller = 0; $teller <= 10; $teller++) :
    echo $teller.PHP_EOL;
endfor;

if ($count > 1) :
    print_r($authors);
else :
    echo "Er zijn te weinig auteurs";
endif;

$reading = true;
$number = 0;

while($reading) :
    echo $number.PHP_EOL;
    $number++;
    $number === 10 ?  $reading = false : $reading = true;
endwhile;