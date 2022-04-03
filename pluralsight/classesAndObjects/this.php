<?php

// pseudo-variable this
class Person
{
    const AVG_LIVE_SPAN = 79;

    // public $firstName; zonder initial value
    public  $firstName = "Dieter"; // met initial value
    public $lastName = "Van Staey";
    public $yearBorn = 1979;

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$mijnObject = new Person();
