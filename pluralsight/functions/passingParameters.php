<?php

// enkele parameter meegeven
$authorName = "Ronny de Schrijver";
$bookYear = 2014;

bookByAuthor("Dieter Van Staey");
bookByAuthor($authorName);

function bookByAuthor($authorName)
{
    echo $authorName."\n";
}

// meerdere parameters meegeven

bookByAuthorYear("Dieter Van Staey", 2018);
bookByAuthorYear($authorName, $bookYear);

function bookByAuthorYear($authorName, $year)
{
    echo $authorName." - ".$year."\n";
}
?>