<?php

class Person
{
    const AVG_LIVE_SPAN = 79;

    // public $firstName; zonder initial value
    public  $firstName = "Dieter"; // met initial value
    public $lastName = "Van Staey";
    public $yearBorn = 1979;

    public function getFirstName()
    {

    }
    public function setFirstName($tempName)
    {

    }
}

$mijnObject = new Person();
