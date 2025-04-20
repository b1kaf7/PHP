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
    public function displayDetails()
    {
        echo "Name: {$this->name}, Age: {$this->age}<br>";
    }
}
$student1 = new Student("Binamra", 20);
$student2 = new Student("Kushal", 22);
$student1->displayDetails();
$student2->displayDetails();
