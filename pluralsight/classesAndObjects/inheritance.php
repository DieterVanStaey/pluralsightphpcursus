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
        echo "I'm in the constructor".PHP_EOL;
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
    }

    public function getFirstName()
    {
        return $this->firstName.PHP_EOL;
    }
    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
    public function  getFullName()
    {
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends  Person
{
    public $penName = "Mark Twain";
    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }
    public function  getFullName()
    {
        echo "Author->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

$nieweAuteur = new Author("Ronny", "Den Ezel", "1925");
echo $nieweAuteur->getFullName();