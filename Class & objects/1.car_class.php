<?php
class Car
{
    public $brand;
    public function displayBrand()
    {
        echo "Car brand: " . $this->brand;
    }
}
$car = new Car();
$car->brand = "BMW";
$car->displayBrand();
