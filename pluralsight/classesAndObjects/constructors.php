<?php

class Person
{
    const AVG_LIVE_SPAN = 79;

    // public $firstName; zonder initial value
    public  $firstName;
    public $lastName;
    public $yearBorn;

    function __construct()
    {
        //echo "I'm in the constructor";
        $this->firstName="Dieter";
        $this->lastName="Van Staey";
        $this->yearBorn=1979;
    }

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

echo $mijnObject->getFirstName();