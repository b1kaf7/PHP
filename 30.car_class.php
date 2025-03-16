<?php
class Car
{
    public $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    public function displayBrand()
    {
        echo "Car Brand: " . $this->brand;
    }
}

$myCar = new Car("Toyota");

$myCar->displayBrand();
