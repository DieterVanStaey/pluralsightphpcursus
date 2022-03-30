<?php
$authorName = "Ronny de Schrijver";
$bookYear = 2014;

bookByAuthorYear("Dieter Van Staey", 2018);
bookByAuthorYear("Roel Van Staey");
bookByAuthorYear($authorName, $bookYear);

function bookByAuthorYear($authorName, $year = 1976) // default value
{
    echo $authorName." - ".$year."\n";
}