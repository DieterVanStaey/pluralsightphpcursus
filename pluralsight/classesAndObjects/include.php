<?php
include 'person.php';
include_once 'author.php';
$newAuthor = new Author("Samuel", "Van Staey", 2012);
echo $newAuthor->getCompleteName();