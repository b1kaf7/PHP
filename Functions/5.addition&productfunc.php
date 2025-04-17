<?php
function add($a, $b)
{
    return "The sum of $a and $b is " . ($a + $b);
}

function mult($a, $b)
{
    return "The product of $a and $b is " . ($a * $b);
}

$operation = "add";
if (is_callable($operation)) {
    echo $operation(4, 5);
}

echo "<br>";

$operation = "mult";
if (is_callable($operation)) {
    echo $operation(4, 5);
}
