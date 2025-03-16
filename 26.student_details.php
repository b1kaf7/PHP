<?php
$student = [
    "name" => "Sweetie",
    "age" => 20,
    "grade" => "A"
];

foreach ($student as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
