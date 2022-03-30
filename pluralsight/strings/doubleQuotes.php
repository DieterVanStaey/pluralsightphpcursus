<?php

$currency = "penny";
$sampleString = "A $currency saved is a $currency earned\n";

echo $sampleString;

$var = 2;
// curlies werken niet bij single quoted
echo "{$var}nd place\n";

// concat werkt ook met single quoted
echo $var . "nd place";
?>