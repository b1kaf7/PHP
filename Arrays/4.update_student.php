<?php
$student = [
    'Name' => 'Hency',
    'Grade' => 'A',
    'Age' => 21
];

$student['Email'] = 'hency@gmail.com';
unset($student['Age']);

foreach ($student as $key => $value) {
    echo "$key: $value <br>";
}
