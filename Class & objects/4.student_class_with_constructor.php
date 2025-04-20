<?php
class Student
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function displayInfo()
    {
        echo "Name: $this->name, Age: $this->age";
    }
}
$student = new Student("Kusal Don", 25);
$student->displayInfo();
