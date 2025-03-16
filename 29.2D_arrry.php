<?php
$students = [
    ["Alice", 20, "A"],
    ["Bob", 21, "B"],
    ["Charlie", 22, "C"]
];

foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . " ";
    }
    echo "<br>";
}
