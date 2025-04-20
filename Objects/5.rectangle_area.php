<?php
class Rectangle
{
    public $length;
    public $width;
    public function getArea()
    {
        return $this->length * $this->width;
    }
}
$rect = new Rectangle();
$rect->length = 5;
$rect->width = 3;
echo "Area: " . $rect->getArea();
