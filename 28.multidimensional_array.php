<?php
$employee = [
    ['name' => 'Binamra', 'position' => 'manager', 'salary' => '500000'],
    ['name' => 'Rohan', 'position' => 'CEO', 'salary' => '5000000'],
    ['name' => 'Kushal', 'position' => 'guard', 'salary' => '5000'],
];

foreach ($employee as $detail) {
    echo "Name: " . $detail['name'] . "<br>";
    echo "Position: " . $detail['position'] . "<br>";
    echo "Salary: " . $detail['salary'] . "<br><br>";
}
