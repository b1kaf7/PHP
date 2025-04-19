<?php
$employee = [
    ['name' => 'Binamra', 'position' => 'Manager', 'salary' => 'XXXXX'],
    ['name' => 'Rohan', 'position' => 'CEO', 'salary' => 'XXXXX'],
    ['name' => 'Kushal', 'position' => 'Manager', 'salary' => 'XXXXX'],
];

foreach ($employee as $detail) {
    echo "Name: " . $detail['name'] . "<br>";
    echo "Position: " . $detail['position'] . "<br>";
    echo "Salary: " . $detail['salary'] . "<br><br>";
}
