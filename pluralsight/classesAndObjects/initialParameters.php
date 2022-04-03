<?php

class Person
{
    const AVG_LIVE_SPAN = 79;

    // public $firstName; zonder initial value
    public  $firstName;
    public $lastName;
    public $yearBorn;

    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
    {
        //echo "I'm in the constructor";
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
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

$mijnObject = new Person("Dieter", "Van Staey", 1979);

echo $mijnObject->getFirstName();