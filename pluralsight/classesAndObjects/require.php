<?php
include 'person.php';
include_once 'author.php';

include 'blabla.php';

// require 'blabla.php';

$newAuthor = new Author("Samuel", "Van Staey", 2012);
echo $newAuthor->getCompleteName();

// verschil ts include <=> require
// indien include niet gevonden => error maar script loopt door
// indien requiere niet gevonden => error en script stopt


