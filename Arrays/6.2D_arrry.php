<?php
$students = [
    ["Kushal", 20, "A"],
    ["Rohan", 21, "B"],
    ["Ajit", 22, "C"]
];

foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . " ";
    }
    echo "<br>";
}
