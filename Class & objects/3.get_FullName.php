<?php
class Person
{
    public $firstName;
    public $lastName;
    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}
$person = new Person();
$person->firstName = "Binamra";
$person->lastName = "Kafle";
echo "Full Name: " . $person->getFullName();
