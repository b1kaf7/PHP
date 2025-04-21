<?php
class Car
{
    public $brand;
    public function displayBrand()
    {
        echo $this->brand;
    }
}
$methods = get_class_methods('Car');
$properties = get_class_vars('Car');

echo "Methods: " . implode(", ", $methods) . "\n";
echo "Properties: " . implode(", ", array_keys($properties));
