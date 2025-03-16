<?php
$student = [
    'Name' => 'Rohan',
    'Grade' => 'A',
    'Age' => 21
];

$student['Email'] = 'rohan@gmail.com';
unset($student['Age']);

foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}
