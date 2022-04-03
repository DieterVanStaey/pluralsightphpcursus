<?php

class Person
{
    const AVG_LIVE_SPAN = 79;

    // public $firstName; zonder initial value
    public  $firstName = "Dieter"; // met initial value
    public $lastName = "Van Staey";
    public $yearBorn = 1979;
}

$mijnObject = new Person();

echo $mijnObject::AVG_LIVE_SPAN;
// of
echo Person::AVG_LIVE_SPAN;
