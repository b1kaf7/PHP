<?php
class Car {}
$car = new Car();
if ($car instanceof Car) {
    echo "\$car is an instance of Car";
} else {
    echo "\$car is NOT an instance of Car";
}
