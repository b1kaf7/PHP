<?php

function add($a, $b)
{
    return $a + $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

$operation = 'add';
echo "Add: " . $operation(2, 3) . "\n";

$operation = 'multiply';
echo "Multiply: " . $operation(2, 3);
