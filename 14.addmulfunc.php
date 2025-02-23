<?php
function add($a, $b)
{
    return $a + $b;
}
function mult($a, $b)
{
    return $a * $b;
}
$operation = "add";
echo $operation(4, 5);
echo "<br>";
$operation = "mult";
echo $operation(4, 5);
