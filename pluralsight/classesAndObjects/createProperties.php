<?php


class Person
{
    // public $firstName; zonder initial value
    public  $firstName = "Dieter"; // met initial value
    public $lastName = "Van Staey";
    public $yearBorn = 1979;
}

$mijnObject = new Person();