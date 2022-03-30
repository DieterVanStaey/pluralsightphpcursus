<?php
// variabelen zijn case sensitief

$caseSensitief = "Een waarde\n";
$CaseSensitief = "Een andere waarde\n ";

echo $caseSensitief;
echo $CaseSensitief;

// classes  en functions zijn niet case sensitief
class text {
    public function textWrite($text1, $text2){
        return $text1.$text2;
    }
}
$t = new Text();
echo $t->TextwriTe($caseSensitief, $CaseSensitief);
?>
