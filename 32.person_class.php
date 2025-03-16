<?php
class Person
{
    public $firstname;
    public $lastname;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function displayFullName()
    {
        echo "Full Name: " . $this->firstname . " " . $this->lastname;
    }
}

$person = new Person("Hency", "Boy");
$person->displayFullName();
